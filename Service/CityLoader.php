<?php
class CityLoader
{
    private $DBM;

    public function __construct( DBManager $DBM)
    {
        $this->DBM = $DBM;
    }

    public function LoadCity( $id = null )
    {
        $cities = array();

        $sql = "select * from images";
        if ( $id > 0 ) $sql .= " where img_id=$id";

        $data = $this->DBM->GetData($sql);
        foreach ( $data as $row )
        {
            $city = new City();

            $city->setId( $row['img_id'] );
            $city->setFileName( $row['img_filename'] );
            $city->setTitle( $row['img_title'] );
            $city->setWidth( $row['img_width'] );
            $city->setHeight( $row['img_height'] );
            $city->setCountry( $row['img_country'] );

            $cities[] = $city;
        }

        return $cities;
    }

}