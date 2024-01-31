<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  On Demand Products</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-person_requesting">
                                        <th class="title"> Person Requesting: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['person_requesting']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="person_requesting" 
                                                data-title="Enter Person Requesting" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['person_requesting']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-product_requested">
                                        <th class="title"> Product Requested: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['product_requested']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="product_requested" 
                                                data-title="Enter Product Requested" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['product_requested']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-product_type">
                                        <th class="title"> Product Type: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['product_type']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="product_type" 
                                                data-title="Enter Product Type" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['product_type']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-quantity">
                                        <th class="title"> Quantity: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['quantity']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="quantity" 
                                                data-title="Enter Quantity" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['quantity']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-unit_of_measure">
                                        <th class="title"> Unit Of Measure: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['unit_of_measure']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="unit_of_measure" 
                                                data-title="Enter Unit Of Measure" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['unit_of_measure']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-expected_date">
                                        <th class="title"> Expected Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['expected_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="expected_date" 
                                                data-title="Enter Expected Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['expected_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-county">
                                        <th class="title"> County: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['county']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="county" 
                                                data-title="Enter County" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['county']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-location">
                                        <th class="title"> Location: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['location']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="location" 
                                                data-title="Enter Location" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['location']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-price_per_unit">
                                        <th class="title"> Price Per Unit: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['price_per_unit']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="price_per_unit" 
                                                data-title="Enter Price Per Unit" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['price_per_unit']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-fulfillment_status">
                                        <th class="title"> Fulfillment Status: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['fulfillment_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("on_demand_products/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="fulfillment_status" 
                                                data-title="Enter Fulfillment Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['fulfillment_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-date_created">
                                        <th class="title"> Date Created: </th>
                                        <td class="value"> <?php echo $data['date_created']; ?></td>
                                    </tr>
                                    <tr  class="td-date_updated">
                                        <th class="title"> Date Updated: </th>
                                        <td class="value"> <?php echo $data['date_updated']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("on_demand_products/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("on_demand_products/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
