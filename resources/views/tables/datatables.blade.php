@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('css')
    @vite([
        'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css',
        'node_modules/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css',
        'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
        'node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css'
     ])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Data Tables</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
            <li class="breadcrumb-item active">Data Tables</li>
        </ol>
    </div>
</div>

<!-- Datatables  -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Basic Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<!-- Button Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Button Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- KeyTable Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">KeyTable Example Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="key-table" class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Responsive Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Responsive Example Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Multi Item Selection Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multi item selection Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="selection-datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Scroll - Vertical Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Scroll Vertical Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="scroll-vertical-datatable" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Alternative Pagination Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Alternative Pagination Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Scroll - Horizontal Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Scroll Horizontal Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Complex headers with column visibility -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Complex Header Datatable</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="complex-header-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th rowspan="2" class="align-middle">Name</th>
                            <th colspan="2">HR Information</th>
                            <th colspan="3">Contact</th>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>E-mail</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Row Created Callback DataTable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Row Created Callback</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="row-callback-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- State Saving DataTable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">State Saving</h5>
            </div>

            <div class="card-body">
                <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Fixed Columns Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Fixed Columns DataTable</h5>
            </div>

            <div class="card-body">
                <table id="fixed-columns-datatable" class="table table-striped nowrap row-border order-column w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Fixed Header Datatable -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Fixed Header DataTable</h5>
            </div>

            <div class="card-body">
                <table id="fixed-header-datatable" class="table table-striped dt-responsive nowrap table-striped w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>Project Manager</td>
                            <td>Los Angeles</td>
                            <td>35</td>
                            <td>2023-08-10</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>29</td>
                            <td>2022-12-05</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>31</td>
                            <td>2023-04-18</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>28</td>
                            <td>2023-10-30</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>David Miller</td>
                            <td>Product Manager</td>
                            <td>Seattle</td>
                            <td>33</td>
                            <td>2022-09-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Jessica Thompson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>30</td>
                            <td>2023-01-25</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Matthew Lee</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>34</td>
                            <td>2022-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Olivia Garcia</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>27</td>
                            <td>2023-07-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>James Hernandez</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>32</td>
                            <td>2023-03-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emma Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>29</td>
                            <td>2023-09-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>William Clark</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>28</td>
                            <td>2023-05-28</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Ava Taylor</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>26</td>
                            <td>2022-10-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Joseph White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>31</td>
                            <td>2023-02-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>30</td>
                            <td>2023-12-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Daniel Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-06-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>27</td>
                            <td>2023-11-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Logan Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>32</td>
                            <td>2022-12-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Mia Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>29</td>
                            <td>2023-08-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Benjamin King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>34</td>
                            <td>2022-09-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>31</td>
                            <td>2023-03-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>28</td>
                            <td>2023-10-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Madison Jackson</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>30</td>
                            <td>2023-01-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Adams</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>27</td>
                            <td>2022-07-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Walker</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>32</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Jack Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>26</td>
                            <td>2023-02-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Hannah Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>33</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Liam Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2023-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Grace Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Dylan Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>34</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Victoria Moore</td>
                            <td>Software Developer</td>
                            <td>Boston</td>
                            <td>27</td>
                            <td>2023-07-12</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Nathan Lopez</td>
                            <td>Marketing Specialist</td>
                            <td>Chicago</td>
                            <td>33</td>
                            <td>2023-02-28</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Hailey Adams</td>
                            <td>Product Manager</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2022-10-15</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Andrew Thompson</td>
                            <td>Financial Analyst</td>
                            <td>Houston</td>
                            <td>29</td>
                            <td>2023-12-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Madeline Wilson</td>
                            <td>HR Specialist</td>
                            <td>Miami</td>
                            <td>32</td>
                            <td>2023-06-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Garcia</td>
                            <td>Data Scientist</td>
                            <td>Denver</td>
                            <td>28</td>
                            <td>2023-11-08</td>
                            <td>$130,000</td>
                        </tr>
                        <tr>
                            <td>Kayla Hernandez</td>
                            <td>Graphic Designer</td>
                            <td>Atlanta</td>
                            <td>31</td>
                            <td>2023-04-20</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Landon Scott</td>
                            <td>Business Analyst</td>
                            <td>Phoenix</td>
                            <td>26</td>
                            <td>2023-09-12</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Sophie Martinez</td>
                            <td>UX/UI Designer</td>
                            <td>Portland</td>
                            <td>33</td>
                            <td>2023-01-05</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Henry Clark</td>
                            <td>Content Writer</td>
                            <td>Philadelphia</td>
                            <td>29</td>
                            <td>2022-08-22</td>
                            <td>$70,000</td>
                        </tr>
                        <tr>
                            <td>Grace White</td>
                            <td>Project Coordinator</td>
                            <td>Dallas</td>
                            <td>30</td>
                            <td>2023-03-15</td>
                            <td>$85,000</td>
                        </tr>
                        <tr>
                            <td>Lucas Perez</td>
                            <td>Systems Analyst</td>
                            <td>San Diego</td>
                            <td>27</td>
                            <td>2023-10-10</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>Emma Scott</td>
                            <td>Marketing Manager</td>
                            <td>Charlotte</td>
                            <td>34</td>
                            <td>2022-12-18</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Noah Rodriguez</td>
                            <td>Financial Advisor</td>
                            <td>Las Vegas</td>
                            <td>31</td>
                            <td>2023-07-05</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Chloe Nguyen</td>
                            <td>Product Designer</td>
                            <td>Minneapolis</td>
                            <td>28</td>
                            <td>2023-02-20</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>William Kim</td>
                            <td>HR Manager</td>
                            <td>Orlando</td>
                            <td>33</td>
                            <td>2022-09-25</td>
                            <td>$100,000</td>
                        </tr>
                        <tr>
                            <td>Emily King</td>
                            <td>Data Engineer</td>
                            <td>Salt Lake City</td>
                            <td>30</td>
                            <td>2023-04-10</td>
                            <td>$125,000</td>
                        </tr>
                        <tr>
                            <td>Nicholas Thomas</td>
                            <td>Business Development Manager</td>
                            <td>Tampa</td>
                            <td>27</td>
                            <td>2023-11-28</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Oliver Martinez</td>
                            <td>Software Tester</td>
                            <td>Austin</td>
                            <td>34</td>
                            <td>2023-08-15</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Sophia Brown</td>
                            <td>UX/UI Developer</td>
                            <td>Washington D.C.</td>
                            <td>31</td>
                            <td>2022-07-10</td>
                            <td>$90,000</td>
                        </tr>
                        <tr>
                            <td>Liam Wilson</td>
                            <td>Content Manager</td>
                            <td>San Jose</td>
                            <td>28</td>
                            <td>2023-12-22</td>
                            <td>$75,000</td>
                        </tr>
                        <tr>
                            <td>Charlotte Garcia</td>
                            <td>Project Analyst</td>
                            <td>Detroit</td>
                            <td>33</td>
                            <td>2023-05-05</td>
                            <td>$110,000</td>
                        </tr>
                        <tr>
                            <td>Ethan Wright</td>
                            <td>Technical Writer</td>
                            <td>Indianapolis</td>
                            <td>30</td>
                            <td>2023-01-20</td>
                            <td>$80,000</td>
                        </tr>
                        <tr>
                            <td>Isabella Baker</td>
                            <td>Systems Administrator</td>
                            <td>Charlotte</td>
                            <td>27</td>
                            <td>2023-09-18</td>
                            <td>$105,000</td>
                        </tr>
                        <tr>
                            <td>James Hall</td>
                            <td>Marketing Coordinator</td>
                            <td>San Francisco</td>
                            <td>34</td>
                            <td>2022-06-15</td>
                            <td>$95,000</td>
                        </tr>
                        <tr>
                            <td>Emma Young</td>
                            <td>Product Owner</td>
                            <td>Denver</td>
                            <td>29</td>
                            <td>2022-11-30</td>
                            <td>$120,000</td>
                        </tr>
                        <tr>
                            <td>Aiden Evans</td>
                            <td>Business Consultant</td>
                            <td>Seattle</td>
                            <td>32</td>
                            <td>2023-04-05</td>
                            <td>$100,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/datatable.init.js'])
@endsection