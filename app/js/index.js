$(document).ready(function(){
    var root = 'https://www.citepo.com.co/';

    $('#btn').on("click",function(e){
        e.preventDefault();
        
        let txtName = $('#Name').val();
        let txtLastName = $('#LastName').val();
        let txtEmail = $('#Email').val();
        let txtDateBirth = $('#DateBirth').val();
        let txtDni = $('#ID').val();
        let txtPhone = $('#phone').val();
        let txtCountries = $('#countries').val();
        let txtProvince = $('#Province').val();
        let txtCity = $('#city').val();
        let txtCheckOne = $('#validationFormCheck2').attr('checked');
        let txtCheck = "";

        if (txtCheckOne){
            txtCheck = "Técnico";
        } else {
            txtCheck = $("#msg2").val();
        }

        if(txtName !== "" && txtLastName !== "" && txtEmail !== "" && txtDateBirth !== "" && txtDni !== "" &&
        txtPhone !== "" && txtCountries !== "" && txtProvince !== "" && txtCity !== "" && txtCheck !== ""){
            $.ajax({
                type: "POST",
                url: root + "app/includes/ClientInclude.php",
                data: {
                    name: txtName,
                    lastName: txtLastName,
                    email: txtEmail,
                    dateBirth: txtDateBirth,
                    dni: txtDni,
                    phone: txtPhone,
                    countries: txtCountries,
                    province: txtProvince,
                    city: txtCity,
                    ocupation: txtCheck
                },
                success: function(data){
                    if(data.split(",")[0] == "true"){
                        console.log(data);   
                    }else {
                        console.log(data);
                    }   
                },
                error: function(data){
                    console.log(data);
                }
            });
        }

    });
});