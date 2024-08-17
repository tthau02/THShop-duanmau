// JavaScript để chọn/bỏ chọn tất cả các checkbox
document.getElementById('selectAll').onclick = function() {
    var checkboxes = document.getElementsByClassName('selectItem');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
}

// JavaScript cho nút Chọn tất cả
document.getElementById('selectAllBtn').onclick = function() {
    var checkboxes = document.getElementsByClassName('selectItem');
    for (var checkbox of checkboxes) {
        checkbox.checked = true;
    }
}

// JavaScript cho nút Bỏ chọn tất cả
document.getElementById('deselectAllBtn').onclick = function() {
    var checkboxes = document.getElementsByClassName('selectItem');
    for (var checkbox of checkboxes) {
        checkbox.checked = false;
    }
}
