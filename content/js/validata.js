document.getElementById('addProductForm').addEventListener('submit', function(event) {   
    var name = document.getElementById('name').value.trim();
    var description = document.getElementById('description').value.trim();
    var price = document.getElementById('price').value.trim();
    var discount = document.getElementById('discount').value.trim();
    var date_add = document.getElementById('date_add').value;
    var type_product = document.getElementById('type_product').value;
    var image_pro = document.getElementById('image_pro').files.length;
    
    // Kiểm tra các trường input có hợp lệ hay không
    if (name === "" || description === "" || discount === "" || date_add === "" || type_product === "" || image_pro === 0) {
        alert("Vui lòng điền đầy đủ thông tin.");
        event.preventDefault();
    }

    // Kiểm tra giá và giảm giá có phải số hợp lệ hay không
    if (isNaN(price) || isNaN(discount)) {
        alert("Giá và Giảm giá phải là số hợp lệ.");
        event.preventDefault();
    }
});