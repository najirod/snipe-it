<?php
header('Content-Type: application/json');

define("API_KEY", "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDYzNjMwZDlhMzgyMGUzMGVhMDEwY2Y5ZmMwYjgwNjFmOGRiOTVhNTA0NTkwMzIyN2IyMDU5YjBlYjhjNDdmNjY3ZGNmZGRkY2FjNTIzZjYiLCJpYXQiOjE2NDEyOTk4MDIsIm5iZiI6MTY0MTI5OTgwMiwiZXhwIjoyOTAzNjAzODAyLCJzdWIiOiIxNTUiLCJzY29wZXMiOltdfQ.lHpM4lB4oQiu2PdSoLNbiIIHff8VGK-hORYNw70b-kxv7d4qWcsIStxjhG_s0VIVZQvxJAr05KuzY0CJSwdYHJIk3w8Eo_aQm-oq1xP-0XLpeNBPzzNEkQZy2lgqRdBAlV__eJrkYEEstAJoBo3Yp5uccFRelByJMUQozjF8EKT6NB2bmxGszMsJyh7q5TnnoLkKZShlE2D9XVLndBxsFS5PbcNtHNf5U0WGVvxsBXBMQjCi2j-aX_NWx5B5r721he3rjylulIB0FpvPhoDg22GHlgsoB2q4sLwETpeUB-8wmKQwGdG5BaOeIVJXCHDviZDCn3SY4RSg3wi0knfNq9QZZZnDUM8GCyiZeLtuCCzA64EbVMLG9pkdRX4s6uulvnSeFOYIgqbexsWumz87fJGsSfjCzM88Ig6X96J0KerIY2KY-6rQ4cJqiP1-WmgHxzoiM1JVdu7oE_DGZH6CvvkmyNIJfpXBQ5yT0UlnGkqhCINuz4SX_M8ediCXI4-beB0DkwQclpLNMn0IMxLBaVwkoC3T1gCuslNymR5dGhTY1BNzTzgh7ZzJSz8_yVSOSgh-dYL45qMdM4C2N5YDwgAuS3ndgySjVBR2WB26a92GGTsgPdFDWNGPtJHWQw8MBECSAGEKw-iqhf_M-fgqgx7rqQEl2PnySuEXYed8BIQ");

$data['api_key'] = API_KEY;

echo json_encode($data);
