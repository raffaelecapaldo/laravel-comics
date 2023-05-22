<footer>
    <div class="footer-nav">
        <div class="container container-footernav d-flex justify-content-between text-white pt-5 d-md-flex justify-content-center  d-block">
            <div class="links row ">
                <div v-for="group in groupLinks" class="group-link col-4 ">
                    <h3 class="fw-bold fs-5 text-uppercase">{{group.title}}</h3>
                    <ul>
                       <a class="small" v-for="link in group.links" :href="link.url"> <li>{{ link.text }}</li></a>
                    </ul>
                    <div v-for="item in group?.inside">
                    <h3 class="fw-bold fs-5 text-uppercase mt-3">{{item.title}}</h3>
                    <ul>
                       <a class="small" v-for="link in item?.links" :href="link.url"> <li>{{ link.text }}</li></a>
                    </ul>
                </div>
                </div>
            </div>
            <div class="bg-footer d-none d-lg-block">
                <img src="/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
</footer>
