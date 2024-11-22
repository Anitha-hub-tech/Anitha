<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> -->
  <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $one=$_POST['first'] ;
  $two=$_POST['second'] ;
  $three=$_POST['email'] ;
  $tel=$_POST['telephone'];
  $identi=$_POST['id'] ;
  $str=$_POST['street'] ;
  $cit=$_POST['city'] ;
  $obet=$_POST['obenefit'] ;
  $com=$_POST['community'] ;
  $rang=$_POST['range'] ;
  $ybene=$_POST['ybenefit'] ;
  $ex=$_POST['extra'] ;
  $upl=$_POST['upload'] ;
  $prev=$_POST['previous'] ;
}
?>
<table border="1" cellspacing="0" >
    
<tr>
    <th>Firstname</th>
    <th>Secondname</th>
    <th>email</th>
    <th>telephone n</th>
    <th>Id index</th>
    <th>street</th>
    <th>city</th>
    <th>Our benefit from the applicants</th>
    <th>applicant community</th>
    <th>how you range our school</th>
    <th>applicantsbenefit from school</th>
    <th>extra-curricular activities</th>
    <th>uploaded files</th>
    <th>applicants'previous school</th>
</tr>
    <tr>
        <td><?php echo "$one"; ?></td>
        <td><?php echo $two; ?></td>
        <td><?php echo $three; ?></td>
        <td><?php echo $tel; ?></td>
        <td><?php echo $identi; ?></td>
        <td><?php echo $str; ?></td>
        <td><?php echo $cit; ?></td>
        <td><?php echo $obet; ?></td>
        <td><?php echo $com; ?></td>
        <td><?php echo $rang; ?></td>
        <td><?php echo $ybene; ?></td>
        <td><?php echo $ex; ?></td>
        <td><?php echo $upl; ?></td>
        <td><?php echo $prev; ?></td>
    
    </tr>

</table>

</body>
</html>
