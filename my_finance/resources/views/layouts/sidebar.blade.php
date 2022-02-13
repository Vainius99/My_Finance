<nav class="sidebar">
    <div>
        <form>
            <div class="input-group sidebar-btn">
                <input class="form-control" type="text" placeholder="Search...">
                <button type="submit" class="btn btn-warning" value="search">Search</button>
            </div>
        </form>
            <div>
                <button class="btn btn-dark sidebar-btn" name="dropdownBtn" type="button" id="dropdownBtn1">Home</button>
                    <div class="contentShow1 d-none">
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                    </div>
            </div>
            <div>
                <button class="btn btn-dark sidebar-btn" name="dropdownBtn" type="button" id="dropdownBtn2">test1</button>
                    <div class="contentShow2 d-none">
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                    </div>
            </div>
            <div>
                <button class="btn btn-dark sidebar-btn" name="dropdownBtn" type="button" id="dropdownBtn3">test2</button>
                    <div class="contentShow3 d-none">
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                        <a class="btn btn-a sidebar-btn">link</a>
                    </div>
            </div>
    </div>
</nav>

<script>

// let dropdownBtn = document.querySelectorAll('#dropdownBtn');
// console.log(dropdownBtn);

// for (var i = 0; i < dropdownBtn.length;  i++) {

// }

$(document).ready(function() {
        $("#dropdownBtn1").on('click', function() {
            $("div.contentShow1").toggleClass("d-none");
    });
});
$(document).ready(function() {
        $("#dropdownBtn2").on('click', function() {
            $("div.contentShow2").toggleClass("d-none");
    });
});
$(document).ready(function() {
        $("#dropdownBtn3").on('click', function() {
            $("div.contentShow3").toggleClass("d-none");
    });
});
</script>
