<?php 
     /****** Query Get Airlines Reservation Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT res_airline.*, airlines.name_en AS 'airline_name',countries.name AS 'country_name' FROM `res_airline` INNER JOIN `airlines` ON res_airline.airline_id = airlines.id INNER JOIN `countries` ON res_airline.country_res_id = countries.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $res_airline = $stmt->fetchAll();
?>

<!-- Start Header Reservation  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Reservation Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Reservation  -->

<div class="row py-3"></div>

<!-- Start Content Reservation  -->
    <div class="row overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date_In</th>
                    <th scope="col">Date_Out</th>
                    <th scope="col">Price</th>
                    <th scope="col">Airline Name</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($res_airline)){ $i = 1; foreach($res_airline as $airline){
                    $date_out = $airline['date_out'] == '0000-00-00' ? '-' : $airline['date_out'];
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>";switch ($airline['type']) {
                                case 0:
                                    echo 'Premium Economy Class';
                                    
                                    break;
                                case 1:
                                    echo 'Business Class';
                                    break;
                                case 2:
                                    echo 'First-Class';
                                    break;
                                default:
                                    # code...
                                    break;
                                }echo "</td>
                            <td>".$airline['date_in']."</td>
                            <td>".$date_out."</td>
                            <td>".$airline['price']."$</td>
                            <td>".$airline['airline_name']."</td>
                            <td>".$airline['country_name']."</td>
                            <td class=''>
                                <a href='?page=airlines&edit_res=".$airline['id']."' class='btn btn-info '><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=airlines&delete_res=".$airline['id']."' class='btn btn-danger '><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                    }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Airlines Reservation Found</h3></td> </tr>";} 
                ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=airlines&add_res" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Airlines Reservation</a>
        <a href="/admin/?page=airlines" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Reservation  -->