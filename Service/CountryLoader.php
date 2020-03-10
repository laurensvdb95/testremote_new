<?php


class CountryLoader
{
    private $DBM;

    public function __construct( DBManager $DBM)
    {
        $this->DBM = $DBM;
    }

    public function LoadCountry( $id = null )
    {
        $countries = array();

        $sql = "select * from country";
        if ( $id > 0 ) $sql .= " where img_id=$id";

        $data = $this->DBM->GetData($sql);
        foreach ( $data as $row )
        {
            $country = new Country();

            $country->setId( $row['img_id'] );
            $country->setFileName( $row['img_filename'] );
            $country->setTitle( $row['img_title'] );
            $country->setWidth( $row['img_width'] );
            $country->setHeight( $row['img_height'] );
            $country->setCapital( $row['img_capital'] );

            $countries[] = $country;
        }

        return $countries;
    }
}