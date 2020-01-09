<!DOCTYPE html>

<html>

<head>

	<title>Hi</title>
  <!--  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">-->


<style>
    html{
        margin:5px;
        padding:0;
    },
    body{
        padding: 0;
    margin: 0;
    }

#invoice{
    width: 20.8cm;
  min-height: 20cm; 
  margin: 0px;
}
.invoice {
    position: relative;
    background-color: #FFF;

}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 30px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
   /* padding: 8px 0*/
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice:before

  {

    opacity: 0.07;
    content: "";
    position: absolute;
  width: 100%;
  height: 100%;
/*background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100"><image width="40" height="40" xlink:href="data:image/png;base64,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" /></svg>');*/

background:url('/storage/logo_bg.png') repeat space;
/*background-position:
    top 10px left 10px,
    top 10px left 50%,
    top 10px right 10px,
    top 50% right 50%,
    top 50% left 1%,
    top 50% right 1%,
    bottom 10px left 10px,
    bottom 10px left 50%,
    bottom 10px right 10px;
  
  background-size: 100px;
  background-repeat: no-repeat;
background-image: 
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png'),
    url('/storage/logo_bg.png');*/

  }


</style>
</head>

<body>
<div id="invoice">

    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="data:image/png;base64,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" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="">
                            Arboshiki
                            </a>
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(123) 456-789</div>
                        <div>company@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">John Doe</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com">john@example.com</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">HOUR PRICE</th>
                            <th class="text-right">HOURS</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">04</td>
                            <td class="text-left"><h3>
                                <a target="_blank" href="">
                                Youtube channel
                                </a>
                                </h3>
                               <a target="_blank" href="">
                                   Useful videos
                               </a> 
                               to improve your Javascript skills. Subscribe and stay tuned :)
                            </td>
                            <td class="unit">$0.00</td>
                            <td class="qty">100</td>
                            <td class="total">$0.00</td>
                        </tr>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                            <td class="unit">$40.00</td>
                            <td class="qty">30</td>
                            <td class="total">$1,200.00</td>
                        </tr>
                        <tr>
                            <td class="no">02</td>
                            <td class="text-left"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
                            <td class="unit">$40.00</td>
                            <td class="qty">80</td>
                            <td class="total">$3,200.00</td>
                        </tr>
                        <tr>
                            <td class="no">03</td>
                            <td class="text-left"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                            <td class="unit">$40.00</td>
                            <td class="qty">20</td>
                            <td class="total">$800.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 25%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>$6,500.00</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

</body>

</html>
