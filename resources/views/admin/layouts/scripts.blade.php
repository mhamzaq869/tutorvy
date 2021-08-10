
    <!-- jquery  -->
    <script src="{{ asset('/admin/assets/js/jquery.js ')}}"></script>
    <script src="{{ asset('/admin/assets/js/jquery-ui.js')}}"></script>
      <!-- bootstrap 4 javascript -->
    <script src="{{ asset('/admin/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('/admin/assets/js/bootstrap.min.js')}}"></script>
     <!-- chart javascript -->
    <script src="{{ asset('/admin/assets/js/chart.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Custom js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('/admin/assets/js/mobile.js')}}"></script>
    <script src="{{ asset('/admin/assets/js/global.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOIfEfDtYJRmL9ALc-bcfJPukqy_8OCwQ&libraries=places&callback=initAutocomplete"></script>


    <script>
        // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
        // Based on https://gist.github.com/blixt/f17b47c62508be59987b
        var _seed = 42;
        Math.random = function () {
            _seed = _seed * 16807 % 2147483647;
            return (_seed - 1) / 2147483646;
        };
    </script>

    <script>
        var generateDayWiseTimeSeries = function (baseval, count, yrange) {
            var i = 0;
            var series = [];
            while (i < count) {
                var x = baseval;
                var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

                series.push([x, y]);
                baseval += 86400000;
                i++;
            }
            return series;
        }
    </script>
    <script>
        var options = {
            series: [
                {
                    name: 'Teacher',
                    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                        min: 10,
                        max: 60
                    })
                },
                {
                    name: 'Student',
                    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                        min: 10,
                        max: 20
                    })
                },
                {
                    name: 'Institute',
                    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                        min: 10,
                        max: 15
                    })
                }
            ],
            chart: {
                type: 'area',
                //   height: 'auto',
                height: '240vh',
                stacked: true,
                events: {
                    selection: function (chart, e) {
                        console.log(new Date(e.xaxis.min))
                    }
                },
            },
            colors: ['#008FFB', '#00E396', '#CED4DC'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    opacityFrom: 0.6,
                    opacityTo: 0.8,
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            },
            xaxis: {
                type: 'datetime'
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

    </script>
    <script>
        // serach location
        var input = document.getElementById('search-location');
        var options = {
            types: ['(cities)']
        };

        var autocomplete = new google.maps.places.Autocomplete(input, options);

        $(input).on('input', function () {
            var str = input.value;
            var prefix = '';
            if (str.indexOf(prefix) == 0) {
                console.log(input.value);
            } else {
                if (prefix.indexOf(str) >= 0) {
                    input.value = prefix;
                } else {
                    input.value = prefix + str;
                }
            }

        });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            // var lat = place.geometry.location.lat();
            // var long = place.geometry.location.lng();
            // alert(lat + ", " + long);
            var location = place.name;
            $("#search-location").val(location);
            $.ajax({
                url: "/assets/js/ticket-id.json'",
                type: "GET",
                data: {
                    id: $("#home-ticket-1").val(),
                    location: $("#search-location").val(),
                    avaiblilty: $("#availability-id").val(),
                    rate: $("#rate-number").val(),

                },
                // how can I get selected value here
                beforeSend: function () {
                    // alert("Send data ...")
                },
                success: function (data) {
                    $('#datas').html("");
                    $.each(data.employees, function (i, data) {
                        var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
                        $('#datas').append(div_datae);
                    });
                },
            });
        });

        // end serach location
        //  tutor serach
        // $(document).ready(function () {
        //     $("#home-ticket-1").autocomplete({
        //         source: "/assets/js/test1.json",
        //         minLength: 3,
        //         select: function (event, ui) {
        //             $.ajax({
        //                 method: "get",
        //                 url: "assets/js/ticket-id.json",
        //                 data: { bookTitle: ui.item.value }
        //             })
        //                 .done(function (data) {
        //                     $('#datas').html("");
        //                     $.each(data.employees, function (i, data) {
        //                         var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
        //                         $('#datas').append(div_datae);
        //                     });
        //                 })
        //         }
        //     });
        // });
        // home-ticket


    </script>
    <!-- graph js -->
    <script>
        var options = {
            series: [{
                name: 'Inflation',
                data: [2.3, 3.1, 4.0, 10.1, 4.0,]
            }],
            chart: {
                height: '250vh',
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val + "%";
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },

            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                position: 'bottom',
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                crosshairs: {
                    fill: {
                        type: 'gradient',
                        gradient: {
                            colorFrom: '#D8E3F0',
                            colorTo: '#BED1E6',
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                        }
                    }
                },
                tooltip: {
                    enabled: true,
                }
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function (val) {
                        return val + "%";
                    }
                }

            },
            title: {
                text: 'Monthly Inflation in Argentina, 2002',
                floating: true,
                offsetY: 330,
                align: 'center',
                style: {
                    color: '#444'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#columnchart"), options);
        chart.render();
        // keypress modal js
        // get input field and add 'keyup' event listener
        let searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('keyup', search);
    </script>
    <!-- end graph js -->
    <script>
        $(document).ready(function ($) {
            $('#TypeFeed').change(function () {

                $.ajax({
                    url: "/assets/js/ticket-id.json",

                    // url: $('#TypeFeed').val() + '.html',
                    type: "GET",
                    data: {
                        id: $("#home-ticket-1").val(),
                        location: $("#search-location").val(),
                        avaiblilty: $("#availability-id").val(),
                        rate: $("#rate-number").val(),

                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")

                    },
                    success: function (data) {
                        $('#datas').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
                            $('#datas').append(div_datae);
                            window.history.pushState("object or string", "", "/new-url") = data;
                            // window.pushState = data;
                            // window.location.replace("your_url")
                            // var url = $(this).val();
                            // if (url) {
                            //     window.location = url;
                            // }
                            // return false;

                        });

                    },

                });
            });
            //
            // $('#home-ticket-1').keydown(function () {
            //     $.ajax({
            //         url: "/assets/js/ticket-id.json",
            //         type: "GET",
            //         data: {
            //             id: $("#home-ticket-1").val(),
            //             location: $("#search-location").val(),
            //             avaiblilty: $("#availability-id").val(),
            //             rate: $("#rate-number").val(),

            //         },
            //         // how can I get selected value here
            //         beforeSend: function () {
            //             // alert("Send data ...")
            //         },
            //         success: function (data) {
            //             $('#datas').html("");
            //             $.each(data.employees, function (i, data) {
            //                 var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
            //                 $('#datas').append(div_datae);
            //             });
            //         },
            //     });
            // });
            $('#availability-id').change(function () {
                $.ajax({
                    url: "/assets/js/ticket-id.json",
                    type: "GET",
                    data: {
                        id: $("#home-ticket-1").val(),
                        location: $("#search-location").val(),
                        student: $("#TypeFeed").val(),
                        rate: $("#rate-number").val(),

                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")
                    },
                    success: function (data) {
                        $('#datas').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
                            $('#datas').append(div_datae);
                        });

                    },
                });
            });
        });
        $(document).ready(function ($) {
            $('#rate-number').change(function () {
                $.ajax({
                    url: "/assets/js/ticket-id.json",
                    type: "GET",
                    data: {
                        id: $("#home-ticket-1").val(),
                        location: $("#search-location").val(),
                        student: $("#TypeFeed").val(),
                        avaiblilty: $("#availability-id").val(),

                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")
                    },
                    success: function (data) {
                        $('#datas').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
                            $('#datas').append(div_datae);
                        });

                    },
                });
            })
        });
        $(document).ready(function ($) {
            $('#sort-by-home').change(function () {
                $.ajax({
                    url: "/assets/js/ticket-id.json",
                    type: "GET",
                    data: {
                        id: "1",
                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")
                    },
                    success: function (data) {
                        $('#datas').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = '<tr> <td class="pt-3 alex-name-2"> <div class="container"> <div class="row"> <div class="col-md-5 m-0 p-0"> <span class="alex-name"> <img class="img-whih-table" src=' + data.img + ' alt="std-icon"/> </span> </div><div class="col-md-7 m-0 p-0 alex-21 mt-2"> <span class="alex-name ml-3" id="name">' + data.name + '</span> </div></div></div></td><td class="pt-4">123456789</td><td class="pt-4"> <span href="#" data-toggle="tooltip" title="harramlaraib127@gmail.com">' + data.email + '</span> </td><td class="pt-4">' + data.subject + '</td><td class="pt-4">' + data.location + '</td><td class="pt-4">Advance</td><td class="pt-4" id="avalibility">' + data.avaiblilty + '</td><td class="pt-4">' + data.rate + '</td>   <td class="pt-3 float-right"> <a href=' + data.button + ' class="cencel-btn btn"> View </a> </td><td class="pt-3 float-right"> <button class="schedule-btn" data-toggle="modal" data-target="#exampleModalCenter">Assign</button> </td></tr>';
                            $('#datas').append(div_datae);
                        });
                    },
                });
            })
        });

    </script>
    <!--  -->

    <script>
        $(document).ready(function ($) {
            $('#home-category').change(function () {
                // var url = $(this).val();
                $.ajax({
                    url: "/assets/js/ticket-id.json",
                    type: "GET",
                    data: {

                        ticketNo: $("#home-ticket").val(),
                        userName: $("#home-user").val(),
                        status: $("#home-status").val(),

                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")
                    },
                    success: function (data) {
                        $('#datashow').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = ' <tr> <td class="pt-4"> <span>' + data.ticket + '</span> </td><td class="pt-4">' + data.user + '</td><td class="pt-4">' + data.ticketSubject + '</td><td class="pt-4">' + data.category + '</td><td class="pt-4">' + data.date + '</td><td class="pt-4">' + data.answerby + '</td><td class="pt-4"> <span class="pending-text">' + data.pending + '</span> </td><td class="pt-3 float-right"> <a href=' + data.button + ' class="schedule-btn btn">View</a> </td></tr>';
                            $('#datashow').append(div_datae);
                            window.location = url; // redirect
                        });
                    },
                });
            });

            //

            $('#home-status').change(function () {
                $.ajax({
                    url: "/assets/js/ticket-id.json",
                    type: "GET",
                    data: {

                        ticketNo: $("#home-ticket").val(),
                        userName: $("#home-user").val(),
                        status: $("#home-category").val(),

                    },
                    // how can I get selected value here
                    beforeSend: function () {
                        // alert("Send data ...")
                    },
                    success: function (data) {
                        $('#datashow').html("");
                        $.each(data.employees, function (i, data) {
                            var div_datae = ' <tr> <td class="pt-4"> <span>' + data.ticket + '</span> </td><td class="pt-4">' + data.user + '</td><td class="pt-4">' + data.ticketSubject + '</td><td class="pt-4">' + data.category + '</td><td class="pt-4">' + data.date + '</td><td class="pt-4">' + data.answerby + '</td><td class="pt-4"> <span class="pending-text">' + data.pending + '</span> </td><td class="pt-3 float-right"> <a href=' + data.button + ' class="schedule-btn btn">View</a> </td></tr>';
                            $('#datashow').append(div_datae);
                        });
                    },
                });
            });
            $(document).ready(function ($) {
                $('#sort-by-home-1').change(function () {
                    $.ajax({
                        url: "/assets/js/ticket-id.json",
                        type: "GET",
                        data: {
                            id: "2",
                        },
                        // how can I get selected value here
                        beforeSend: function () {
                            // alert("Send data ...")
                        },
                        success: function (data) {
                            $('#datas').html("");
                            $.each(data.employees, function (i, data) {
                                var div_datae = ' <tr> <td class="pt-4"> <span>' + data.ticket + '</span> </td><td class="pt-4">' + data.user + '</td><td class="pt-4">' + data.ticketSubject + '</td><td class="pt-4">' + data.category + '</td><td class="pt-4">' + data.date + '</td><td class="pt-4">' + data.answerby + '</td><td class="pt-4"> <span class="pending-text">' + data.pending + '</span> </td><td class="pt-3 float-right"> <a href=' + data.button + ' class="schedule-btn btn">View</a> </td></tr>';
                                $('#datashow').append(div_datae);
                            });
                        },
                    });
                })
            });
        });
    </script>
