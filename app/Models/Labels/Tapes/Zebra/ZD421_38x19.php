<?php

namespace App\Models\Labels\Tapes\Zebra;


class ZD421_38x19 extends ZD421
{   
    private const BARCODE_SIZE   = 5;

    private const BARCODE_MARGIN =   1;
    private const D_margin = 5;
    private const TAG_SIZE       =   5.80;
    private const TITLE_SIZE     =   2.00;
    private const TITLE_MARGIN   =   0.50;
    private const LABEL_SIZE     =   2.00;
    private const LABEL_MARGIN   =   0;
    private const FIELD_SIZE     =   2.50;
    private const FIELD_MARGIN   =   0.15;



    public function getUnit()  { return 'mm'; }
    public function getWidth() { return 38.1; }
    public function getHeight() { return 19.1; }
    //public function getMarginLeft() {return 2;}
    public function getMarginRight() {return 1.5;}
    public function getSupportAssetTag()  { return true; }
    public function getSupport1DBarcode() { return true; }
    public function getSupport2DBarcode() { return true; }
    public function getSupportFields()    { return 3; }
    public function getSupportLogo()      { return false; }
    public function getSupportTitle()     { return true; }

    public function preparePDF($pdf) {}

    public function write($pdf, $record) {
        $pa = $this->getPrintableArea();

        $currentX = $pa->x1;
        $currentY = $pa->y1;
        $usableWidth = $pa->w;

        $barcodeSize = $pa->h - self::TAG_SIZE;


        $serial = $record->get('serial');

    	if ($record->has('barcode1d')) {
                static::write1DBarcode(
                    $pdf, $record->get('barcode1d')->content, $record->get('barcode1d')->type,
                    $pa->x1, $pa->y2 - self::D_margin, $pa->w, self::BARCODE_SIZE
                );
            }

        if ($record->has('barcode2d')) {
            static::write2DBarcode(
                $pdf, $record->get('barcode2d')->content, $record->get('barcode2d')->type,
                $currentX, $currentY,
                $barcodeSize, $barcodeSize
            );
            $currentX += $barcodeSize + self::BARCODE_MARGIN;
            $usableWidth -= $barcodeSize + self::BARCODE_MARGIN;
        } else {
            static::writeText(
                $pdf, $record->get('tag'),
                $pa->x1, $pa->y2 - self::TAG_SIZE,
                'freemono', 'b', self::TAG_SIZE, 'R',
                $usableWidth, self::TAG_SIZE, true, 0
            );
        }

        if ($record->has('title')) {
            static::writeText(
                $pdf, $record->get('title'),
                $currentX, $currentY,
                'freesans', '', self::TITLE_SIZE, 'L',
                $usableWidth, self::TITLE_SIZE, true, 0
            );
            $currentY += self::TITLE_SIZE + self::TITLE_MARGIN;
            
            static::writeText(
                $pdf, "T: ".$record->get('tag'),
                $currentX , $currentY,
                'freesans', 'b', self::LABEL_SIZE, 'L',
                $usableWidth, self::LABEL_SIZE, true, 0
            );
            $currentY += self::TITLE_MARGIN + self::LABEL_SIZE;

            if (!empty($record->get('serial'))) {
                if (strlen($serial) > 15) {
                    $serialPart1 = substr($serial, 0, 15);
                    $serialPart2 = substr($serial, 15);

                    static::writeText(
                        $pdf, "S/N: ".$serialPart1,
                        $currentX , $currentY,
                        'freesans', 'b', self::LABEL_SIZE, 'L',
                        $usableWidth, self::LABEL_SIZE, true, 0, 0.2,
                    );
                    $currentY += self::TITLE_MARGIN + self::LABEL_SIZE;

                    static::writeText(
                        $pdf, $serialPart2,
                        $currentX , $currentY,
                        'freesans', 'b', self::LABEL_SIZE, 'L',
                        $usableWidth, self::LABEL_SIZE, true, 0, 0.2,
                    );
                    $currentY += self::TITLE_MARGIN + self::LABEL_SIZE;
                } else {
                    static::writeText(
                        $pdf, "S/N: ".$serial,
                        $currentX , $currentY,
                        'freesans', 'b', self::LABEL_SIZE, 'L',
                        $usableWidth, self::LABEL_SIZE, true, 0, 0.2,
                    );

                    $currentY += self::TITLE_MARGIN + self::LABEL_SIZE;
                }
            }
            
            if (!empty($record->get('os'))) {
            static::writeText(
                $pdf, "OS: ".$record->get('os'),
                $currentX , $currentY,
                'freesans', 'b', self::LABEL_SIZE, 'L',
                $usableWidth, self::LABEL_SIZE, true, 0
            );
            //$currentY += self::TITLE_MARGIN + self::LABEL_SIZE;
        }

            if (!empty($record->get('zopu'))) {
            static::writeText(
                $pdf, "*".$record->get('zopu')."*",
                25 , $currentY,
                'freesans', 'b', self::LABEL_SIZE, 'L',
                $usableWidth, self::LABEL_SIZE, true, 0
            );
            $currentY += self::TITLE_MARGIN + self::LABEL_SIZE;

        }
    }

        foreach ($record->get('fields') as $field) {
            static::writeText(
                $pdf, $field['label']." ".$field['value'],
                $currentX, $currentY,
                'freesans', 'b', self::LABEL_SIZE, 'L',
                $usableWidth, self::LABEL_SIZE, true, 0, 0
            );
            $currentY += self::LABEL_SIZE + self::LABEL_MARGIN;


            
        }
    }
}
