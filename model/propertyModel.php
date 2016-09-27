<?php

include_once("model/property.php");
include_once("model/connect.php");

class PropertyModel {

    public function findAllByPropertyType($propertyTypeID) {
        
    }

    public function save($property) {
        $stmt = "INSERT INTO `property`(`PropertyName`,`PropertyTypeID`,`CityID`,`StreetAddress`,
                                                    `ShortDescription`,`AboutUs`,`OpeningHour`,`ClosingHour`,
                                                    `ManagerName`,`Email`,`OfficePhone`,`Mobile`,`Fax`,`GeoLocation`)
                                                    VALUES
                                                    ('$property->propertyName','$property->propertyTypeID','$property->cityID',
                                                    '$property->streetAddress','$property->shortDescription','$property->aboutUs','$property->openingHour',
                                                    '$property->closingHour','$property->managerName','$property->email','$property->officePhone','$property->mobile',
                                                    '$property->fax','$property->geoLocation');";

        $resultUser = mysqli_query($connection, $stmt) or die(mysqli_error($connection));
        if (mysqli_num_rows($result) == 1) {
            return true;
        } else {
            return false;
        }
    }

}
