<!-- Profile 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/client/images/avatar/avatarDefault.gif" class="img-fluid rounded-circle"
                                        alt="">
                                </div>
                                <h5 class="text-center mb-1">{{ $user->name }}</h5>
                                <p class="text-center text-secondary mb-4">
                                    @if ($user->roles == 0)
                                        Admin
                                    @else
                                        Customer
                                    @endif
                                </p>
                                <ul class="list-group list-group-flush mb-4">

                                </ul>
                                {{-- <div class="d-grid m-0">
                                    <button class="btn btn-outline-primary" type="button">Follow</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-body p-4">
                        <ul class="nav nav-tabs" id="profileTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Hồ sơ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                    data-bs-target="#password-tab-pane" type="button" role="tab"
                                    aria-controls="password-tab-pane" aria-selected="false">Mật khẩu</button>
                            </li>

                            {{-- custom start --}}
                             <li class="nav-item" role="presentation">
                                <button class="nav-link" id="order-tab" data-bs-toggle="tab"
                                    data-bs-target="#order-tab-pane" type="button" role="tab"
                                    aria-controls="order-tab-pane" aria-selected="false">Đơn hàng</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-4" id="profileTabContent">
                            {{-- Profile --}}
                            <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                {{-- <form action="" class="row gy-3 gy-xxl-4"> --}}
                                    <div class="col-12 col-md-6">
                                        <label for="fullname" class="form-label">Họ và tên</label>
                                        <input type="text" name="name" class="form-control" id="fullname"
                                            value="{{ $user->name }}">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email"
                                            value="{{ $user->email }}">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address"
                                            value="{{ $user->address }}">
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="numberphone" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="numberphone"
                                            value="{{ $user->numberphone }}">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
                                {{-- </form> --}}
                            </div>

                            {{-- change password --}}
                            <div class="tab-pane fade show" id="password-tab-pane" role="tabpanel"
                                aria-labelledby="password-tab" tabindex="0">
                                <form method="post" action="{{ route('change.password') }}">
                                    @csrf
                                    <div class="row gy-3 gy-xxl-4">
                                        <div class="col-12">
                                            <label for="currentPassword" class="form-label">Mật khẩu hiện tại</label>
                                            <input type="password" name="currentpassword" class="form-control" id="currentPassword">
                                        </div>

                                        <div class="col-12">
                                            <label for="newPassword" class="form-label">Mật khẩu mới</label>
                                            <input type="password" name="newpassword" class="form-control" id="newPassword">
                                        </div>

                                        <div class="col-12">
                                            <label for="confirmPassword" class="form-label">Nhập lại mật khẩu</label>
                                            <input type="password" name="confirmpassword" class="form-control" id="confirmPassword">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Thay đổi mật khẩu</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
