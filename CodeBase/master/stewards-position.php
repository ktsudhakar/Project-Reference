<!doctype html>
<html lang="en">

<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <h2 class="title">Stewards Position Template</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class=" table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:8%;">#</th>
                                        <th style="width:40%;">Template Name</th>
                                        <th style="width:35%;">Event Catgory</th>
                                        <th style="width:10%;" class="text-center">View</th>
                                        <th style="width:7%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#CertificationModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Name 1</td>
                                        <td>Ullamcorper taciti fringilla aptent.</td>
                                        <td class="text-center"><a href="javascript:void(0);" title="View"><img src="../images/view.svg" width="25" /></a></td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Name 2</td>
                                        <td>Ullamcorper taciti fringilla aptent.</td>
                                        <td class="text-center"><a href="javascript:void(0);" title="View"><img src="../images/view.svg" width="25" /></a></td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Modal -->
    <div class="modal fade" id="CertificationModal" tabindex="-1" role="dialog" aria-labelledby="CertificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CertificationModalLabel">Add Stewards Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Template Names</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Event Category<span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>In Progress</option>
                                            <option>Open</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="form-group text-right">
                                        <div class="btn-group">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button type="button" data-dismiss="modal" class="btn btn-primary save-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../delete-popup.php';?>

    <?php include 'master-scripts.php';?>

</body>
</html>