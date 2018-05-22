<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<table id="sample-table-11" class="table table-bordered table-hover dataTable" aria-describedby="sample-table-11_info" style="font-size:7px">
									<thead>
										<tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No#: activate to sort column descending" style="width: 44px;">No#</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="File Number: activate to sort column ascending" style="width: 98px;">File Number</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Loan Type: activate to sort column ascending" style="width: 76px;">Loan Type</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Loan Nature: activate to sort column ascending" style="width: 90px;">Loan Nature</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Loan Amount: activate to sort column ascending" style="width: 97px;">Loan Amount</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 110px;">Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Handphone: activate to sort column ascending" style="width: 87px;">Handphone</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 183px;">Email</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Application Date: activate to sort column ascending" style="width: 116px;">Application Date</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 124px;">Status</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-11" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 53px;">Action</th></tr>
									</thead>

									
								<tbody role="alert" aria-live="polite" aria-relevant="all"><tr bgcolor="#ecbdbd" class="odd">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">1</span></td>
                                            <td class="center ">LSM-C-684372</td>   
                                            <td class="center ">-</td>  
                                            <td class="center ">-</td>
                                            <td class="center ">500,000</td>                                         
											<td class=" ">Consultant </td>
											<td class=" ">88888888</td>	
                                            <td class=" ">Consultant@gmail.com</td>
                                            <td class=" ">05/15/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(16)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../consultant/index.php?loanapplicationkey=16"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="even">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">10</span></td>
                                            <td class="center ">LSM-P-7BZHJD</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">Private</td>
                                            <td class="center ">100,000</td>                                         
											<td class=" ">Vaibhav Mathur</td>
											<td class=" ">08400030020</td>	
                                            <td class=" ">vaibhav.mathur8@gmail.com</td>
                                            <td class=" ">04/24/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(1)" style="text-align:center;cursor:pointer;">Case Closed - won</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=1"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="odd">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">11</span></td>
                                            <td class="center ">LSM-P-9A1BDL</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">80,000,000</td>                                         
											<td class=" ">Andy Dude</td>
											<td class=" ">96966969</td>	
                                            <td class=" ">andy@dandy.net</td>
                                            <td class=" ">04/24/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(6)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=6"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="even">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">2</span></td>
                                            <td class="center ">LSM-P-930864</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">120,000</td>                                         
											<td class=" ">Steve Jobs</td>
											<td class=" ">99999999</td>	
                                            <td class=" ">steve.jobs@facebook.com</td>
                                            <td class=" ">05/14/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(15)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=15"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="odd">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">3</span></td>
                                            <td class="center ">LSM-P-725083</td>   
                                            <td class="center ">Refinance</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">120,000</td>                                         
											<td class=" ">Robin Steven</td>
											<td class=" ">899999999</td>	
                                            <td class=" ">robin@steven.com</td>
                                            <td class=" ">05/14/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(14)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=14"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="even">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">4</span></td>
                                            <td class="center ">LSM-P-9W6KYV</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">9,000,000</td>                                         
											<td class=" ">Anudeep</td>
											<td class=" ">98986969</td>	
                                            <td class=" ">abcd@lsm.com</td>
                                            <td class=" ">05/14/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(5)" style="text-align:center;cursor:pointer;">Case Closed - Lost</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=5"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="odd">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">5</span></td>
                                            <td class="center ">LSM-P-219840</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">700,000</td>                                         
											<td class=" ">ANUDEEP</td>
											<td class=" ">98989898</td>	
                                            <td class=" ">abcd@abcd.com</td>
                                            <td class=" ">05/14/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(13)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=13"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="#ecbdbd" class="even">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">6</span></td>
                                            <td class="center ">LSM-C-PVUXC4</td>   
                                            <td class="center ">-</td>  
                                            <td class="center ">-</td>
                                            <td class="center ">500,000</td>                                         
											<td class=" ">Consultant </td>
											<td class=" ">88888888</td>	
                                            <td class=" ">Consultant@gmail.com</td>
                                            <td class=" ">05/09/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(12)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../consultant/index.php?loanapplicationkey=12"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="#CCFFCC" class="odd">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">7</span></td>
                                            <td class="center ">LSM-T-KNLTY4</td>   
                                            <td class="center ">-</td>  
                                            <td class="center ">-</td>
                                            <td class="center ">120,000</td>                                         
											<td class=" ">Telemarketing</td>
											<td class=" ">99999999</td>	
                                            <td class=" ">Telemarketing@gmail.com</td>
                                            <td class=" ">05/09/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(11)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../telemarketing/index.php?loanapplicationkey=11"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr><tr bgcolor="" class="even">
                                            <td class="  sorting_1"><span class="label label-large label-yellow arrowed-in">8</span></td>
                                            <td class="center ">LSM-P-Q0OKHY</td>   
                                            <td class="center ">New</td>  
                                            <td class="center ">HDB</td>
                                            <td class="center ">200,000,000</td>                                         
											<td class=" ">Test on 25th April</td>
											<td class=" ">99998888</td>	
                                            <td class=" ">abcd@efg.com</td>
                                            <td class=" ">04/25/2018</td>
                                            <td class=" "><span class="badge badge-pink" onclick="paymentstatus(10)" style="text-align:center;cursor:pointer;">New Lead</span></td>
                                            <td class=" ">
                                                                                        <a class="green" title="View" target="_blank" href="../loanapplicationportal/index.php?loanapplicationkey=10"><i class="icon-search bigger-130"></i></a>
                                                                                        </td>
										</tr></tbody></table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
