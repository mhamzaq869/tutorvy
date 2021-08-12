@extends('tutor.layouts.app')

@section('content')
<div class="content-wrapper " style="overflow: hidden;">
    <div class="container">
        <p class="heading-first">Payment</p>
    </div>
    <!-- payment card -->
    <div class="container">
        <p class="heading-third">My wallet</p>
        <div class="row">

            <div class="col-md-3">
                <div class="cards container-fluid">
                    <img src="../assets/images/ico/dollars.png" style="width: 45px;" class="mt-3">
                    <div class="">
                        <p class="heading-fifth mt-4" style="line-height: 0;">Total Earning</p>
                        <p class="heading-first"> 2550$</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cards container-fluid">
                    <img src="../assets/images/ico/doollarss.png" style="width: 45px;" class="mt-3">
                    <div class="">
                        <p class="heading-fifth mt-4" style="line-height: 0;">Current balance</p>
                        <p class="heading-first"> 650$</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="cards container-fluid">
                    <img src="../assets/images/ico/dolar.png" style="width: 45px;" class="mt-3">
                    <div class="">
                        <p class="heading-fifth mt-4" style="line-height: 0;">Pending balance</p>
                        <p class="heading-first"> 750$</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <!-- end -->
    <!-- payment history -->
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="heading-third">Payment history</p>
                </div>
                <div class="col-md-6">
                    <p class="view-bookings" style="float: right;cursor: pointer;" id="btnExport">Download
                        statment
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="cards" id="tblCustomers" cellspacing="0" cellpadding="0" style="width: 100%;">
                <tr>
                    <th>Subject</th>
                    <th>Topic</th>
                    <th>Time</th>
                    <th>Student</th>
                    <th>Duration</th>
                    <th>Payment Status</th>
                    <th>Amount</th>
                    <th style="visibility: hidden;">adasdasd </th>
                </tr>
                <tr>
                    <td class="pt-4">Chemistry</td>
                    <td class="pt-4">Atomic </td>
                    <td class="pt-4">5 PM - 07 Feb 2021</td>
                    <td class="pt-4">Harram </td>
                    <td class="pt-4">00:30:00</td>
                    <td class="pt-4 Pending"><p>Pending</p></td>
                    <td class="pt-4">
                      15$
                    </td>
                    <td class="pt-4 pr-3"><a href="../payment/paymentdetail.html"> <button
                                class="schedule-btn w-100 ">
                                View details</button></a></td>
                </tr>
                <tr>
                    <td class="pt-4">Chemistry</td>
                    <td class="pt-4">Atomic </td>
                    <td class="pt-4">5 PM - 07 Feb 2021</td>
                    <td class="pt-4">Harram </td>
                    <td class="pt-4">00:30:00</td>
                    <td class="pt-4 Paid"><p>Paid</p></td>
                    <td class="pt-4">
       24$

                    </td>
                    <td class="pt-4 pr-3    "><button class="schedule-btn w-100 ">
                            View details</button></td>
                </tr>
                <tr>
                    <td class="pt-4">Chemistry</td>
                    <td class="pt-4">Atomic </td>
                    <td class="pt-4">5 PM - 07 Feb 2021</td>
                    <td class="pt-4">Harram </td>
                    <td class="pt-4">00:30:00</td>
                    <td class="pt-4 Pending"><p>Pending</p></td>
                    <td class="pt-4">
                34$

                    </td>
                    <td class="pt-4 pr-3"><button class="schedule-btn w-100 ">
                            View details</button></td>
                </tr>
                <tr>
                    <td class="pt-4">Chemistry</td>
                    <td class="pt-4">Atomic </td>
                    <td class="pt-4">5 PM - 07 Feb 2021</td>
                    <td class="pt-4">Harram </td>
                    <td class="pt-4">00:30:00</td>
                    <td class="pt-4 Paid"><p>Paid</p></td>
                    <td class="pt-4">
    21$

                    </td>
                    <td class="pt-4 pr-3"><button class="schedule-btn w-100 ">
                            View details</button></td>
                </tr>
                <tr>
                    <td class="pt-4">Chemistry</td>
                    <td class="pt-4">Atomic </td>
                    <td class="pt-4">5 PM - 07 Feb 2021</td>
                    <td class="pt-4">Harram </td>
                    <td class="pt-4">00:30:00</td>
                    <td class="pt-4 Paid"><p>Paid</p></td>
                    <td class="pt-4">
                     55$

                    </td>
                    <td class="pt-4 pr-3"><button class="schedule-btn w-100 ">
                            View details</button></td>
                </tr>

            </table>
            <br />
            <!-- <input type="button" id="btnExport" value="Export" /> -->
            <script type="text/javascript"
                src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
            <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
            <script type="text/javascript">
                $("body").on("click", "#btnExport", function () {
                    html2canvas($('#tblCustomers')[0], {
                        onrendered: function (canvas) {
                            var data = canvas.toDataURL();
                            var docDefinition = {
                                content: [{
                                    image: data,
                                    width: 500
                                }]
                            };
                            pdfMake.createPdf(docDefinition).download("Table.pdf");
                        }
                    });
                });
            </script>

        </div>
        <!--  -->

        <div class="line"></div>
    </div>
</div>
@endsection
