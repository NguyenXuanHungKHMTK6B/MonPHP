
<form action="login.php" method="post">
        Thông tin:
        <div class="mb-3">
                <label for="" class="form-label">Username: </label>
                <input
                    type="text"
                    class="form-control"
                    name="Name"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Tên người dùng"
                />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password: </label>
            <input
                type="password"
                class="form-control"
                name="Pass"
                id=""
                placeholder="Mật khẩu"
            />
        </div>

        <div class="mb-3">
                <label for="" class="form-label">City: </label>
                <input
                    type="City"
                    class="form-control"
                    name="City"
                    id=""
                    placeholder=""
                />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Webserver: </label>
            <select
                class="form-select form-select-lg"
                name="Webserver"
                id=""
            >
                <option selected value="None">Select one</option>
                <option value="Ha long">Ha long</option>
                <option value="Quang Ninh">Quang Ninh</option>
                <option value="Ho Chi Minh">Ho Chi Minh</option>
            </select>
        </div>
        <div class="mb-3" style="display: flex;">
            <label for="" class="form-label"> 
        </div>
        
        <button
                type="login"
                class="btn btn-primary"
            >
                Login
        </button>
        <button
                type="reset"
                class="btn btn-primary"
            >
                Reset
        </button>
</form>
