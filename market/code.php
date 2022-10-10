<?php
session_start();
require 'dbcon.php';

//Login Page Function
if(isset($_POST['save_login']))
{
  $UserName = $_POST['UserName'];
  $Password = $_POST['Password'];
  
  if($UserName == 'admin' AND $Password == '1234')
  { 
   // $_SESSION['message'] = "Admin Login Successfully";
    header("location: dashboard.php");
     exit(0);
  }
  else
  { 
    $_SESSION['message'] = "Admin Login Unsuccessfully";
    header("location: index.php");
     exit(0);
  }
}


//Category Page Function

if(isset($_POST['delete_category']))
{
  $id = mysqli_real_escape_string($con,$_POST['delete_category']);

  $query = "DELETE FROM `category's` WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "Category Delete Successfully";
     header("location: category.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: category.php");
     exit(0);
   }      
}

if(isset($_POST['update_category']))
{
  $id = mysqli_real_escape_string($con,$_POST['id']);
  $cate = mysqli_real_escape_string($con,$_POST['cate']);
  $code = mysqli_real_escape_string($con,$_POST['code']);
  

  $query = "UPDATE `category's` SET  cate='$cate',code='$code' 
                         WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "Category Update Successfully";
     header("location: category.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: category.php");
     exit(0);
   }      
  
}

if(isset($_POST['save_category']))
{
   $cate = mysqli_real_escape_string($con,$_POST['cate']);
   $code = mysqli_real_escape_string($con,$_POST['code']);

   $query = "INSERT INTO `category's` (cate,code) VALUE 
         ('$cate','$code')";

   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
     $_SESSION['message'] = "Category Created Successfully";
     header("location: category-create.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "<script>Prodect list Created Successfully</script>";
     header("location: category-create.php");
     exit(0);
   }      
}

//Company Page Function

if(isset($_POST['delete_company']))
{
  $id = mysqli_real_escape_string($con,$_POST['delete_company']);

  $query = "DELETE FROM `company's` WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "Company Delete Successfully";
     header("location: company.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: company.php");
     exit(0);
   }      
}

if(isset($_POST['update_company']))
{
  $id = mysqli_real_escape_string($con,$_POST['id']);
  $company = mysqli_real_escape_string($con,$_POST['company']);

  $query = "UPDATE `company's`  SET company='$company' WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "Company Update Successfully";
     header("location: company.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: company.php");
     exit(0);
   }      
  
}

if(isset($_POST['save_company']))
{
   $company = mysqli_real_escape_string($con,$_POST['company']);
   
   $query = "INSERT INTO `company's` (company) VALUE 
         ('$company')";

   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
     $_SESSION['message'] = "Company Created Successfully";
     header("location: company-create.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Company Not Created";
     header("location: company-create.php");
     exit(0);
   }      
}


//Product Page Function

if(isset($_POST['delete_product']))
{
  $id = mysqli_real_escape_string($con,$_POST['delete_product']);

  $query = "DELETE FROM `item's` WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "product Delete Successfully";
     header("location: product.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: product.php");
     exit(0);
   }      
}

if(isset($_POST['update_product']))
{
  $id = mysqli_real_escape_string($con,$_POST['id']);
  $proco = mysqli_real_escape_string($con,$_POST['proco']);
  $names = mysqli_real_escape_string($con,$_POST['names']);
  $cate = mysqli_real_escape_string($con,$_POST['cate']);
  $company = mysqli_real_escape_string($con,$_POST['company']);
  $price = mysqli_real_escape_string($con,$_POST['price']);

  $query = "UPDATE `item's` SET proco='$proco',names='$names', cate='$cate',company='$company',price='$price' 
                         WHERE id='$id' ";
  $query_run = mysqli_query($con,$query);
  if($query_run)
   {
     $_SESSION['message'] = "Prodect Update Successfully";
     header("location: product.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "Prodect list Created UnSuccessfully";
     header("location: product.php");
     exit(0);
   }      
  
}

if(isset($_POST['save_product']))
{
   $proco = mysqli_real_escape_string($con,$_POST['proco']);
   $names = mysqli_real_escape_string($con,$_POST['names']);
   $cate = mysqli_real_escape_string($con,$_POST['cate']);
   $company = mysqli_real_escape_string($con,$_POST['company']);
   $price = mysqli_real_escape_string($con,$_POST['price']);

   $query = "INSERT INTO `item's` (proco,names,cate,company,price) VALUE 
         ('$proco','$names','$cate','$company','$price')";

   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
     $_SESSION['message'] = "<script>Prodect list Created Successfully</script>";
     header("location: product-create.php");
     exit(0);
   }
   else
   {
    $_SESSION['message'] = "<script>Prodect list Created Successfully</script>";
     header("location: product-create.php");
     exit(0);
   }      
}



?>