<?php 
     /****** Query Get Hotels Reservation Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT res_h.*, hotels.name_en AS 'hotel_name' FROM `res_h` INNER JOIN `hotels` ON res_h.hotel_id = hotels.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $res_h = $stmt->fetchAll();
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
                    <th scope="col">Range</th>
                    <th scope="col">Price</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Date_In</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nights</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($res_h)){ $i = 1; foreach($res_h as $hotel){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>";switch ($hotel['type']) {
                                case 0:
                                    echo 'Laxuray Room';
                                    break;
                                case 1:
                                    echo 'Medium Room';
                                    break;
                                case 2:
                                     echo 'Normal Room';
                                    break;
                                default:
                                    # code...
                                    break;
                                }echo "</td>
                            <td>".$hotel['range_room']."</td>
                            <td>".$hotel['price']."$</td>
                            <td>".$hotel['hotel_name']."</td>
                            <td>".$hotel['date_in']."</td>
                            <td>".$hotel['status']."</td>
                            <td>".$hotel['nights']."</td>
                            <td class=''>
                                <a href='?page=hotels&edit_res=".$hotel['id']."' class='btn btn-info '><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=hotels&delete_res=".$hotel['id']."' class='btn btn-danger '><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                    }}else{ echo "<tr> <td colspan='9' class='text-center'> <h3>No Hotels Reservation Found</h3></td> </tr>";} 
                ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=hotels&add_res" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Hotel Reservation</a>
        <a href="/admin/?page=hotels" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Reservation  -->