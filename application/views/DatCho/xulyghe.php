<?php 
    function id($value)//vd 9->09 và 10->10
    {
     $id=$value;
     if($id<10)
     {
       $id="0".$id;
     }
     else
      $id=$id;
    return $id;
  }
  function inghe($trangthai,$maghe,$id)
  {
   if($trangthai==1)
     echo "<li id=\"$maghe\" title=\"$id\" name='ghe'></li>";
   else
    echo "<li id=\"ghedadat\" title=\"$id\"></li>";
  }
  function laygiachuyen($d)
  {
    $i=0;
    $giachuyen=0;
    foreach ($d as $r)
     {
        if($i==0)
        {
          $giachuyen=$r->giachuyen;
          $i++;
        }
        else
          break;
     }
     return $giachuyen;
  }
?>