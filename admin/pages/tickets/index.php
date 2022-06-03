<?php
       /****** Query Get Tickets Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT tickets.*, cities.name_en AS 'city_name' FROM `tickets` INNER JOIN `cities` ON tickets.city_id = cities.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $tickets = $stmt->fetchAll();
?>

<!-- Start Header Tickets  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Tickets Table</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Tickets  -->

<div class="row py-3"></div>

<!-- Start Content Tickets  -->
    <div class="row overflow-auto">
    <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Price</th>
                    <th scope="col">City</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($tickets)){ $i = 1; foreach($tickets as $ticket){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$ticket['price']."</td>
                            <td>".$ticket['city_name']."</td>
                            <td class=''>
                                <a href='?page=tickets&edit=".$ticket['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=tickets&delete=".$ticket['id']."' class='btn btn-danger'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Tickets Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=tickets&add" class="btn btn-primary"><i class="fa fa-add me-1" aria-hidden="true"></i> Add Tickets</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Tickets  -->
