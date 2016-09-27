<?php

include_once("property.php");
include_once("connect.php");

class PropertyModel {

    public function findAllByPropertyType($propertyTypeID) {
        
    }

    public function save($property) {

        print "inside save method!";
        $stmt = "INSERT INTO `property`(`PropertyName`,`PropertyTypeID`,`CityID`,`StreetAddress`,
                                                    `ShortDescription`,`AboutUs`,`OpeningHour`,`ClosingHour`,
                                                    `ManagerName`,`Email`,`OfficePhone`,`Mobile`,`Fax`,`GeoLocation`)
                                                    VALUES
                                                    ('$property->propertyName','$property->propertyTypeID','$property->cityID',
                                                    '$property->streetAddress','$property->shortDescription','$property->aboutUs','$property->openingHour',
                                                    '$property->closingHour','$property->managerName','$property->email','$property->officePhone','$property->mobile',
                                                    '$property->fax','$property->geoLocation');";

        $result = mysqli_query($connection, $stmt) or die(mysqli_error($connection));
        if ($result) {
            print "YOUR REGISTRATION IS COMPLETED...";
        } else {
            print "YOUR REGISTRATION IS Failed...";
        }
    }

}
