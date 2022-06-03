<?php
    /****** Query Get countries Form Database  ****** */
    $countries = DataBaseQuery::selectQuery('*','countries');
?>

<!-- Start Header countries  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Countries Table</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header countries  -->

<div class="row py-3"></div>

<!-- Start Content countries  -->
    <div class="row overflow-auto">
    <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Country</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($countries)){ $i = 1; foreach($countries as $country){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$country['name']."</td>
                            <td class=''>
                                <a href='?page=countries&edit=".$country['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=countries&delete=".$country['id']."' class='btn btn-danger'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Countries Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=countries&add" class="btn btn-primary"><i class="fa fa-add me-1" aria-hidden="true"></i> Add Country</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content countries  -->
