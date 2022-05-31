<?php
/****** Query Get Users Form Database  ****** */
$con = DataBaseQuery::conDataBase();
$sql = "SELECT users.*, countries.name AS 'name_country' FROM `users` INNER JOIN `countries` ON users.country_id = countries.id WHERE users.is_admin = 0";
$stmt = $con->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();


?>



<!-- Start Header Users  -->
<div class="row">
    <div class="col d-flex justify-content-center align-items-center">
        <h1>Users Tables</h1>
    </div>
    <?php include_once ROOT_FILE.'Template/includes/errorsMessage.php'; ?>
    
</div>
<!-- End Header Users  -->

<div class="row py-3"></div>

<!-- Start Content Users  -->
<div class="row">
    <table class="table table-borderd table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">Oprations</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($users)){ $i = 1; foreach($users as $user){
                
                echo "<tr>
                        <th scope='row'>".$i++."</th>
                        <td>".$user['name']."</td>
                        <td>".$user['email']."</td>
                        <td>".$user['name_country']."</td>
                        <td class=''>
                            <a href='?page=users&edit=".$user['id']."' class='btn btn-info'><i class='fa-solid fa-user-pen text-white'></i></a>
                            <a href='?page=users&delete=".$user['id']."' class='btn btn-danger'><i class='fa-solid fa-trash text-white'></i></a>
                        </td>
                    </tr>";
             }}else{ echo "<tr> <td colspan='5' class='text-center'> <h3>No Users Found</h3></td> </tr>";} ?>
        </tbody> 
    </table>
</div>
<!-- End Content Users  -->




