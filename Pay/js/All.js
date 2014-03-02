function getChild(thisValue){
	$.ajax({
		type : "POST",
		url : baseUrl + "/admin123465789/getChirld",
		data : {
			id : thisValue,
		},
		dataType : "json",
		success : function(data) {
			console.log(data);		
			var chirld;
			var tenSp;
			if(data.thissp.type === "1"){
				chirld = "loaisp";
				tenSp = "Chọn loại sản phẩm";
			}
			if(data.thissp.type === "2"){
				chirld = "nhomsp";
				tenSp = "Chọn nhóm sản phẩm";
			}
			var strReturn ='<label for="Sanpham_parent">'+tenSp+'</label><select name="Sanpham[loaisp]" id="Sanpham_parent" onchange="getChild(this.value)">';
			strReturn = strReturn+'<option value="0">--'+tenSp+'--</option>';
			$.each(data.chirld, function () {
				strReturn = strReturn+'<option value="'+this.id+'">'+this.name+'</option>';
	        });
			strReturn = strReturn+'</select>';
			console.log(chirld);
			$("."+chirld).html(strReturn);
		}
	});
}