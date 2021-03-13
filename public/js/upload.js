  // Get the modal
  var modal = document.getElementById("myModal");
 
   // Get the <button> element that closes the modal
  var close = document.getElementById('close');
close.onclick = function() {
modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
     }
     }

    var __PDF_DOC,employee_name,employee_code,employee_pan,employee_career_level,employee_address,period_with_employer,assesment_year,employer_name,employer_tan,employer_pan,total_income,deductions,taxable_income,tax_payable,total_taxes_deducted;
	// When user chooses a PDF file
$("#upload-button").on('change', function() {
	// Validate whether PDF
    if(['application/pdf'].indexOf($("#upload-button").get(0).files[0].type) == -1) {
        alert('Error : Not a PDF');
        return;
    }

	$("#upload-button").hide();

	// Send the object url of the pdf
	showPDF(URL.createObjectURL($("#upload-button").get(0).files[0]), '');
});

$("#submit-password").on('click', function() {
	showPDF(URL.createObjectURL($("#upload-button").get(0).files[0]), $("#pdf-password").val());
});


	// Initialize and load the PDF
function showPDF(pdf_url, password) {
	// $("#pdf-loader").show();
	// $("#password-container").hide();
	
	pdfjsLib.getDocument({ url: pdf_url, password: password }).then(function(pdf_doc) {
		__PDF_DOC = pdf_doc;
		var data1=new Array();
			//call to extract function
			Extractinfo(1).then(function (text) { 
				var string=text.join('');
				//checks whether the pdf is a pdf
				var search=string.search('Form 16');
				if(search==-1)
				{
					return;
				}
				  employee_name=text[0][8];
				  employee_code=text[0][14];
				  employee_pan=text[0][11];
				  employee_career_level=text[0][16]
				   period_with_employer=text[0][19];
				//pushes data to the array
				 data1.push(employee_name,employee_code,employee_pan,employee_career_level,period_with_employer);
				setInfo(data1);
		  }, 
		  function (reason) {
			console.error(reason);
		  });

		Extractinfo(2).then(function (text) { 
			   employer_name=text[0][5];
			   employer_pan=text[0][17];
			   employer_tan=text[0][19];
			   employee_address=text[0][13];
			   assesment_year=text[0][23];
			  data1.push(employer_name,employer_pan,employer_tan,employee_address,assesment_year);
			setInfo(data1);
		}, 
		function (reason) {
		console.error(reason);
		});

		Extractinfo(5).then(function (text) { 
			 total_income=text[0][52];
			 data1.push(total_income);
			 setInfo(data1);
		}, 
		function (reason) {
		console.error(reason);
		});

		Extractinfo(6).then(function (text) {
			 deductions=text[0][44];
			 taxable_income=text[0][49];
			 tax_payable=text[0][61];
			  data1.push(deductions,taxable_income,tax_payable);
			  setInfo(data1);
		}, 
		function (reason) {
		console.error(reason);
		});
		
		Extractinfo(8).then(function (text) {
			  total_taxes_deducted=text[0][154];
			   data1.push(total_taxes_deducted);
			  setInfo(data1);
		}, 
		function (reason) {
		console.error(reason);
		});
		

	}).catch(function(error) { console.log(error)
		// $("#pdf-loader").hide();
		
		if(error.name == 'PasswordException') {
			$("#myModal").show();
			$("#pdf-password").val('');
			$("#error-message").text(error.code == 2 ? error.message : '');
		}
		else {
			$("#upload-button").show();
			alert(error.message);
		}
	});
}

// Extracts infomation from pages
function Extractinfo(page_no) {

  //hides the modal 
  $("#myModal").hide();

	// Fetch the page
	var page=__PDF_DOC.getPage(page_no);

	var countPromises = []; // collecting all page promises
	var txt = "";
	countPromises.push(page.then(function(page) { // add page promise
		var textContent = page.getTextContent();
		return textContent.then(function(text)
		{
			return text.items.map(function (s) { return s.str; }); // value page text 

		}); 
	}));
	// Wait for all pages and join text
    return Promise.all(countPromises).then(function (texts) {
		return texts;
  });


}

function setInfo(x)
{
	// console.log(info);
	if (x.length==15) 
	{
		Livewire.emit('toggle',x);

	}
}





                