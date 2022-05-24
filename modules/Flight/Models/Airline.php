<?php


    namespace Modules\Flight\Models;


    use App\BaseModel;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Modules\Flight\Factories\AirLineFactory;

    class Airline extends BaseModel
    {
        use HasFactory;

        protected $table ='bc_airline';
        protected $fillable = ['name','image_id'];

        protected static function newFactory()
        {
            return AirLineFactory::new();
        }
    }
