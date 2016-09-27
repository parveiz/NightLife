<?php

include_once("model/property.php"); 

class propertyController
{
     public $property;   
     public $properties;
     
     public function __construct()    
     {    
          $this->property = new Property();  
     }  
     
    public function propertyList($propertyTypeID) {
        $this->set('properties', $this->property->findAllByPropertyType($propertyTypeID));
    }
    
    public function addProperty()
    {
        $this->property->propertyName = $_POST['propertyName'];
        $this->property->propertyTypeID = $_POST['propertyTypeID'];
        $this->property->cityID = $_POST['cityID'];
        $this->property->streetAddress = $_POST['streetAddress'];
        $this->property->shortDescription = $_POST['shortDescription'];
        $this->property->propertyID = $_POST['propertyID'];
        $this->property->propertyName = $_POST['propertyName'];
        $this->property->propertyTypeID = $_POST['propertyTypeID'];
        $this->property->cityID = $_POST['cityID'];
        $this->property->streetAddress = $_POST['streetAddress'];
        $this->property->shortDescription = $_POST['shortDescription'];
        $this->property->aboutUs = $_POST['aboutUs'];
        $this->property->openingHour = $_POST['openingHour'];
        $this->property->closingHour = $_POST['closingHour'];
        $this->property->managerName = $_POST['managerName'];
        $this->property->email = $_POST['email'];
        $this->property->officePhone = $_POST['officePhone'];
        $this->property->mobile = $_POST['mobile'];
        $this->property->fax = $_POST['fax'];
        $this->property->geoLocation = $_POST['geoLocation'];
    
        $this->property->save();
    }
    
}
