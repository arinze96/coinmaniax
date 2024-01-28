<script src="{{ asset('assets/customer/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/sidemenu/sidemenu.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/utils.js') }}"></script>
<script src="{{ asset('asset/customer/assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/index1.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/customer/assets/switcher/js/switcher.js') }}"></script>


{{-- ////////////////////DATATABLE DATA////////////////////// --}}
{{-- <script src="{{ asset("assets/customer/assets/plugins/datatable/js/jquery.dataTables.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/dataTables.bootstrap4.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/dataTables.buttons.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.bootstrap4.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/jszip.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/pdfmake.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/vfs_fonts.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.html5.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.print.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.colVis.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/dataTables.responsive.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/responsive.bootstrap4.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/js/datatables.js") }}"></script> --}}
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.extension.js') }}"></script>

<script>
    const baseNumber = 112578;

    function generateRandomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function updateTotalUsers() {
        let currentTotal = parseInt(localStorage.getItem('currentTotal')) || baseNumber;
        currentTotal += generateRandomNumber(1, 20);
        localStorage.setItem('currentTotal', currentTotal);
        document.getElementById("total_users").textContent = `${currentTotal.toLocaleString()}`;
    }
    updateTotalUsers();
    setInterval(updateTotalUsers, 30000);

    /////////////////////CORPORATE INVESTORS///////////////////////////////

    const baseInvestors = 112;
    function updateTotalInvestors() {
        let currentInvestors = parseInt(localStorage.getItem('currentInvestors')) || baseInvestors;
        currentInvestors += generateRandomNumber(1, 5);
        localStorage.setItem('currentInvestors', currentInvestors);
        document.getElementById("total_investors").textContent = `${currentInvestors.toLocaleString()}`;
    }
    updateTotalInvestors();
    setInterval(updateTotalInvestors, 30000);


    ////////////////////////////RANDOM AMOUNT/////////////////////////////
    const baseAmount = 150650;

    function updateDailyInvestments() {
        let currentInvestment = parseInt(localStorage.getItem('currentInvestment')) || baseAmount;
        currentInvestment += generateRandomNumber(50, 100);
        localStorage.setItem('currentInvestment', currentInvestment);
        document.getElementById("daily_investments").textContent = `$${currentInvestment.toLocaleString()}`;
    }
    updateDailyInvestments();
    setInterval(updateDailyInvestments, 70000);

    /////////////////////////LOAN APPLICANT////////////////////////////

    const baseLoanApplicant = 4876;

    function updateDailyLoanApplicants() {
        let currentLoanApplicants = parseInt(localStorage.getItem('currentLoanApplicants')) || baseLoanApplicant;
        currentLoanApplicants += generateRandomNumber(5, 15);
        localStorage.setItem('currentLoanApplicants', currentLoanApplicants);
        document.getElementById("daily_loan_applicants").textContent = `${currentLoanApplicants.toLocaleString()}`;
    }
    updateDailyLoanApplicants();
    setInterval(updateDailyLoanApplicants, 100000);


    ///////////////////////////UPDATE COUNTRY1 ONE PERCENTAGE GROWTH/////////////////////////
    function extractNumberFromString(str) {
        return parseInt(str.replace(/[^0-9]/g, ''));
    }

    function updateNumber() {
        const country1Element = document.getElementById("country1");
        let currentNumber = extractNumberFromString(country1Element.textContent);
        currentNumber += generateRandomNumber(1, 10);
        country1Element.textContent = `$${currentNumber.toLocaleString()}`;
        localStorage.setItem('country1Number', currentNumber);
    }
    updateNumber();
    setInterval(updateNumber, 30000);

    ///////////////////////////UPDATE COUNTRY2 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber2() {
        const country2Element = document.getElementById("country2");
        let currentNumber2 = extractNumberFromString(country2Element.textContent);
        currentNumber2 += generateRandomNumber(10, 15);
        country2Element.textContent = `$${currentNumber2.toLocaleString()}`;
        localStorage.setItem('country2Number', currentNumber2);
    }
    updateNumber2();
    setInterval(updateNumber2, 40000);

    ///////////////////////////UPDATE COUNTRY3 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber3() {
        const country3Element = document.getElementById("country3");
        let currentNumber3 = extractNumberFromString(country3Element.textContent);
        currentNumber3 += generateRandomNumber(5, 10);
        country3Element.textContent = `$${currentNumber3.toLocaleString()}`;
        localStorage.setItem('country3Number', currentNumber3);
    }
    updateNumber3();
    setInterval(updateNumber3, 30000);

    ///////////////////////////UPDATE COUNTRY4 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber4() {
        const country4Element = document.getElementById("country4");
        let currentNumber4 = extractNumberFromString(country4Element.textContent);
        currentNumber4 += generateRandomNumber(13, 15);
        country4Element.textContent = `$${currentNumber4.toLocaleString()}`;
        localStorage.setItem('country4Number', currentNumber4);
    }
    updateNumber4();
    setInterval(updateNumber4, 50000);

    ///////////////////////////UPDATE COUNTRY5 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber5() {
        const country5Element = document.getElementById("country5");
        let currentNumber5 = extractNumberFromString(country5Element.textContent);
        currentNumber5 += generateRandomNumber(3, 10);
        country5Element.textContent = `$${currentNumber5.toLocaleString()}`;
        localStorage.setItem('country5Number', currentNumber5);
    }
    updateNumber5();
    setInterval(updateNumber5, 60000);

    ///////////////////////////UPDATE COUNTRY6 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber6() {
        const country6Element = document.getElementById("country6");
        let currentNumber6 = extractNumberFromString(country6Element.textContent);
        currentNumber6 += generateRandomNumber(7, 10);
        country6Element.textContent = `$${currentNumber6.toLocaleString()}`;
        localStorage.setItem('country6Number', currentNumber6);
    }
    updateNumber6();
    setInterval(updateNumber6, 70000);

    ///////////////////////////UPDATE COUNTRY7 ONE PERCENTAGE GROWTH/////////////////////////
    function updateNumber7() {
        const country7Element = document.getElementById("country7");
        let currentNumber7 = extractNumberFromString(country7Element.textContent);
        currentNumber7 += generateRandomNumber(10, 20);
        country7Element.textContent = `$${currentNumber7.toLocaleString()}`;
        localStorage.setItem('country7Number', currentNumber7);
    }
    updateNumber7();
    setInterval(updateNumber7, 50000);

    ///////////////////////////UPDATE TOTAL INVESTMENT AMOUNT GROWTH/////////////////////////
    function updateTotalInvestments() {
        const t_investmentElement = document.getElementById("t_investment");
        let currentNum1 = extractNumberFromString(t_investmentElement.textContent);
        currentNum1 += generateRandomNumber(1000, 5000);
        t_investmentElement.textContent = `$${currentNum1.toLocaleString()}`;
        localStorage.setItem('t_investmentNumber', currentNum1);
    }
    updateTotalInvestments();
    setInterval(updateTotalInvestments, 20000);

    ///////////////////////////UPDATE TOTAL INVESTMENT AMOUNT GROWTH/////////////////////////
    function updateAverageInvestments() {
        const a_investmentElement = document.getElementById("a_investment");
        let currentNum2 = extractNumberFromString(a_investmentElement.textContent);
        currentNum2 += generateRandomNumber(1000, 5000);
        a_investmentElement.textContent = `$${currentNum2.toLocaleString()}`;
        localStorage.setItem('a_investmentNumber', currentNum2);
    }
    updateAverageInvestments();
    setInterval(updateAverageInvestments, 30000);
</script>
