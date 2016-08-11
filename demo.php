<?php 
include("autoload.php");
// Instantiate the person class
  /*
 * Date:11-08-2016
 * Login Form , entry to the application
 * Author : Litto chacko
 * Email:littochackomp@gmail.com
 *Blog:http://phpdudes.blogspot.com
*/
   $person  = new Person();

// Create new person
   $person->Firstname = "Litto-c";
   $person->Age  = "20";
   $person->Sex = "F";
   $creation = $person->Create();

// Update Person Info
   $person->id = "4";	
   $person->Age = "32";
   $saved = $person->Save(); 

   //create reord array method

 $ins=array('Firstname'=>"Sundar",'Lastname'=>"S",'Age'=>"20",'Sex'=>"F");
   $person  = new Person($ins);
  $created = $person->Create();
  $lastid=$person->lastInsertId();

//getting last Insert ID after Insert
   echo $lastInsertId;

   //Update paarmeter method
 $person->Firstname = "Linnnoo";
   $person->Id = "101";   
   $person->Age = "32";
   $saved = $person->Save(); 

   //Update array method

 $person = new Person(array('Firstname'=>"FFFFF",'Lastname'=>"S",'Age'=>"20",'Sex'=>"F"));
 $saved = $person->Save(142);
   
// Delete Method
$person->Id  = "142";
$deleted     = $person->Delete();

//Fetching one record

$person->Id = "145";
$fgh=$person->find();
//echo $person->Firstname;
print_r($fgh);

//Searching With Condition

$conditions=array('sex' =>"F",'age' =>"20");
$sort=array('Firstname' =>'ASC');
$found_user_array = $person->search($conditions,$sort,$limt);

//print_r($found_user_array);

 // Get all records
   $persons = $person->all();  


for($i=0;$i<count($persons);$i++){
  // echo $persons[$i]['Firstname'];
  // echo '</br>';
}


//Pagination Fetching Records

$start  =   $_GET['start'];
$limit  =   20;
if(empty($start)){
    $start  =   0;
}
$conditions=array('sex' =>"F",'age' =>"20");
$sort=array('Firstname' =>'ASC');
$limt=array('start'=>$start,'limit'=>$limit);
$records = $person->search($conditions,$sort,$limt);
  $allrecords = $person->all(); 


$totalRecords   =  count($allrecords);
$pageRecords    =   count($records);



$cnt    =   $totalRecords/$limit;
$cnt    =   ceil($cnt);
$current    =   ($start/$limit)+1;  

$pg =   new Pages();
$pages  =   $pg->getPages($current,$cnt,$limit);                    
$first  =   $pg->getFirst($cnt,$limit);
$last   =   $pg->getLast($cnt,$limit);
$prev   =   $pg->getPrev($current,$cnt,$limit);
$next   =   $pg->getNext($current,$cnt,$limit);


for($i=0;$i<count($records);$i++){
  echo $records[$i]['Firstname'];
   echo ',';
}

echo '<br/>';
?>

<ul>
                                 <li class="prev disabled">
                                    <a href="index.php?start=<?php echo $first;?>">
                                       <i class="icon-double-angle-left"></i>First
                                    </a>
                                 </li>
 <?php for($i=0;$i<count($pages);$i++){ 
                        $star   =   ($pages[$i]-1)*$limit;  ?>
                                 <li <?php if($start==$star){?> class="active" <?php }?>>
                                    <a href="index.php?start=<?php echo $star;?>&"><?php echo $pages[$i];?></a>
                                 </li>
  <?php }?>
                              

                                 <li class="next">
                                    <a href="index.php?start=<?php echo $last;?>">
                                       <i class="icon-double-angle-right"></i>Last
                                    </a>
                                 </li>
                              </ul>

