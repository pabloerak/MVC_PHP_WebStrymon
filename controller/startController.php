<?php

class startController extends baseController {

    public $prod;
    public $img;
    public $user;

    public function __construct() {
        parent::__construct();
        $this->prod = new ProductModel();
        $this->img = new ImageModel();
        $this->user = new UserModel();      
    }

    public function index() {       
        $productList = $this->prod->getAll();       
        $productNumber = $this->prod->getNumberProducts();
        
        $imagetList = $this->img->getAll();  
        $imagesNumber = $this->img->getNumberImages();
        $ImageLogo = $this->img->getOne(2);
        $ImageStart = $this->img->getOne(1);
       
        $data = array();
        $data['productList'] = $productList;
        $data['productNumber'] = $productNumber;
        $data['imageList'] = $imagetList;
        $data['imagesNumber'] = $imagesNumber;
        $data['imageLogo'] = $ImageLogo;
        $data['ImageStart'] = $ImageStart; 
       
        
        if(isset($_SESSION['USER_NAME']) && !empty($_SESSION['USER_NAME'])){
             $data['message'] = "WELCOME ". $_SESSION["USER_NAME"];
            
        }else{
            $data['message'] = ''; 
         
        }

        $this->view("index", $data);     
    }
    
    public function Login(){       
        $data = array();
        $user=$_POST['user'];
        $password=$_POST['password'];
        $data['message']="";
        
        $productList = $this->prod->getAll();       
        $productNumber = $this->prod->getNumberProducts();
               
        if($session=$this->user->getOneUser($user)){          
            $_SESSION['USER_NAME']=$user;
            $data['message'] = "WELCOME ". $user;  
        }
        
        $imagetList = $this->img->getAll();  
        $imagesNumber = $this->img->getNumberImages();
        $ImageLogo = $this->img->getOne(2);
        $ImageStart = $this->img->getOne(1);
          
        $data['productList'] = $productList;
        $data['productNumber'] = $productNumber;
        $data['imageList'] = $imagetList;
        $data['imagesNumber'] = $imagesNumber;
        $data['imageLogo'] = $ImageLogo;
        $data['ImageStart'] = $ImageStart; 

        $this->view("index", $data);        
    }
    
    
     public function Logout(){       
        $_SESSION['USER_NAME'] = ''; 
       
        $productList = $this->prod->getAll();       
        $productNumber = $this->prod->getNumberProducts();
        
        $imagetList = $this->img->getAll();  
        $imagesNumber = $this->img->getNumberImages();
        $ImageLogo = $this->img->getOne(2);
        $ImageStart = $this->img->getOne(1);
       
        $data = array();
        $data['productList'] = $productList;
        $data['productNumber'] = $productNumber;
        $data['imageList'] = $imagetList;
        $data['imagesNumber'] = $imagesNumber;
        $data['imageLogo'] = $ImageLogo;
        $data['ImageStart'] = $ImageStart; 

        $data['message'] = ''; 

        $this->view("index", $data);   
    }
    

      public function Signin(){
        
        $data = array();

        $ImageLogo = $this->img->getOne(2);
        $data['imageLogo'] = $ImageLogo;
        $data['message']="";

        $this->view("signIn", $data);        
    }

    
     public function RegisterSignin(){
        
        $page="signIn";
        $data = array();

        $ImageLogo = $this->img->getOne(2);
        $data['imageLogo'] = $ImageLogo;
        $user=$_POST['user'];
        $password=$_POST['password'];
        $data['message']="";
         
        if(isset($_POST['user'])&& isset($_POST['password'])){//si hay datos en el formulario 
           //declara una variable donde se guardará el valor del metodo en la clase UserModel
            $insert=$this->user->insertUser($user, $password);
            if($insert){
               $page="index";
                $_SESSION["USER_NAME"]=$user;
                $data['message'] = "WELCOME ". $user;
               
                $this->index();      
            }    
        }     
        $this->view($page, $data); 
    }
    
     public function productList(){
        $data = array();
          
        $product = $this->prod->getAll();
        $data['allImages'] = $product;
           
        if(isset($_SESSION['USER_NAME']) && !empty($_SESSION['USER_NAME'])){
            $data['message'] = "WELCOME ". $_SESSION["USER_NAME"];
            
            }else{
                $data['message'] = ''; 
            }
        $this->view('productList', $data); 
     }
    
    
   
}


?>

