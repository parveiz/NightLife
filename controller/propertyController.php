<?php

include_once("../model/propertyModel.php"); 

class propertyController
{
    
    public $properties;
    public $model;
	
    public function __construct()    
     {    
          $this->model = new PropertyModel();  
          print "inside controller constructor";
     }  
     
    public function propertyList($propertyTypeID) {
        $this->set('properties', $this->propertyModel->findAllByPropertyType($propertyTypeID));
    }
    
    public function addProperty()
            
    {
        print "in property method";
        $property = new Property();
        $property->propertyName = $_POST['propertyName'];
        $property->propertyTypeID = $_POST['propertyTypeID'];
        $property->cityID = $_POST['cityID'];
        $property->streetAddress = $_POST['streetAddress'];
        $property->shortDescription = $_POST['shortDescription'];
        $property->aboutUs = $_POST['aboutUs'];
        $property->openingHour = $_POST['openingHour'];
        $property->closingHour = $_POST['closingHour'];
        $property->managerName = $_POST['managerName'];
        $property->email = $_POST['email'];
        $property->officePhone = $_POST['officePhone'];
        $property->mobile = $_POST['mobile'];
        $property->fax = $_POST['fax'];
        $property->geoLocation = $_POST['geoLocation'];
    
        echo "about to save data!";
        $this->model->save($property);
        
        
    }
    
}
