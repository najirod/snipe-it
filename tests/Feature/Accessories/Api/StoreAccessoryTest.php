<?php

namespace Tests\Feature\Accessories\Api;

use App\Models\User;
use Tests\Concerns\TestsPermissionsRequirement;
use Tests\TestCase;

class StoreAccessoryTest extends TestCase implements TestsPermissionsRequirement
{
    public function testRequiresPermission()
    {
        $this->actingAsForApi(User::factory()->create())
            ->postJson(route('api.accessories.store'))
            ->assertForbidden();
    }

    public function testValidation()
    {
        $this->actingAsForApi(User::factory()->createAccessories()->create())
            ->postJson(route('api.accessories.store'), [
                //
            ])
            ->assertStatusMessageIs('error')
            ->assertMessagesContains([
                'category_id',
                'name',
                'qty',
            ]);
    }

    public function testCanStoreAccessory()
    {
        $this->markTestIncomplete();
    }
}
