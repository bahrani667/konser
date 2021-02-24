<div class="tab-content">
    <div class="card">
        <div class="card-block box-list p-l-40">
            <h4 class="sub-title ">Detail Event</h4>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-sm waves-effect" data-toggle="modal" data-target="#ModalAddperiod"><i class="fa fa-plus"></i>Add period</button>
                </div>
            </div>

            <div class="row">
                <?php
                $queryperiod = mysqli_query($konek, "SELECT*FROM tbl_period WHERE  event_id='$event_id'");
                if ($queryperiod == false) {
                    die("Terjadi Kesalahan : " . mysqli_error($konek));
                }
                while ($period = mysqli_fetch_array($queryperiod)) {
                ?>

                    <div class="col-lg-6">
                        <div class="p-l-20 p-r-20 p-t-20 z-depth-bottom-0 waves-effect" data-toggle="tooltip" data-placement="top" title="period">
                            <div class="row">
                                <div class="col-10 col-md-10">
                                    <a href="event_detail_ticket.php?id=<?php echo $period['period_id']; ?>"><span class="card_detail_admin card-position">#<?php echo $period['period_name']; ?></span><br></span>
                                        <span class="card-content-span">Opening Date<br><i class="fa fa-calendar "></i>&nbsp;&nbsp;<?php echo date('d M Y', strtotime($period['period_date'])); ?>&nbsp;<i class="fa fa-pencil" data-toggle="modal" data-target="#ModalEditperiod<?php echo $period['period_id']; ?>"></i></span><br><br>
                                        <!-- Modal period Edit -->
                                        <div class="modal fade" id="ModalEditperiod<?php echo $period['period_id']; ?>" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit period</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="event_periode_edit_proses.php" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Nama period</label>
                                                                <div class="col-sm-8">
                                                                    <input type="hidden" class="form-control" name="period_id" value="<?php echo $period['period_id']; ?>">
                                                                    <input type="text" class="form-control" name="period_name" value="<?php echo $period['period_name']; ?>">


                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Tanggal period</label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-daterange input-group" id="datepicker11">
                                                                        <input type="text" class="input-sm form-control" name="period_date" placeholder=" " value="<?php echo date('d M y', strtotime($period['period_date'])); ?>">
                                                                        <span class="input-group-addon ">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="event_id" value="<?php echo $period['event_id']; ?>">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal period Edit -->
                                        <span class="card_detail_admin">#Ticket</span><br>
                                        <span class="card-content-span"><i class="fa fa-ticket fa-lg"></i>&nbsp;&nbsp;VIP</span><br><?php ?>
                                        <a href="event_period_delete.php?id=<?php echo $period['period_id']; ?>"><button type="button" class="btn btn-trash btn-sm waves-effect p-l-100"><i class="fa fa-trash"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>