@extends("userlayout")

@section("content")


<div class="container-fluid">

  <div class="row align-items-center justify-content-center">
    <div class="col-12 col-md-8 mt-5" style="">



      <div id="accordion">

        <h2 style="text-align:center; margin-bottom:50px"><i class="fa fa-question-circle" aria-hidden="true"></i> Frequently Asked Questions</h2>


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:#280C65">
          How is JobView different from other places where I can find jobs?

        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        With our job search engine, job seekers get access to millions of jobs
        from all over the Web and employers reach relevant talent for every type of position.
        Unlike other sites that charge a fixed amount per job posting regardless of results,
        our pay-for-performance pricing model means you only pay when you get results.
        And you have complete flexibility – there are no contracts or long-term commitments.
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#280C65">
          How can I find a job or Internship Opportunity?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        As simple as that Just apply for any job or internship opportunity and then you might get a call or email form the
        employers if you good enough to occupay the job. Finding the right internship, especially if you want to get paid,
        takes some time and strategic planning in order to land the perfect opportunity.
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#280C65">
          How much I should spend each month?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        The budget you set will determine how many people see your jobs and how you rank against other
        businesses in search results. Your ideal budget depends on how many jobs you have, the type of jobs,
        your location and industry. Not sure where to start? Contact us for a recommended budget
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#280C65">
          Where does someone go after clicking on my job?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      After a person clicks on your job on Indeed, they are taken directly to the job description on your
      career site so they can apply through your career site or applicant tracking system.
      If you don’t have a career site, you can post jobs directly on Indeed and receive applications by email.
       Manage all candidates within your Indeed dashboard. Review applications, schedule interviews and
       view recommended candidates.
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#280C65">
          Which applicant tracking systems work with JobView?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Many clients use applicant tracking systems (ATS) to manage online recruiting.
        For a full list of applicant tracking systems integrated with Indeed, visit the ATS Integrations page.
        If you don’t have an ATS, Indeed has technology available at no charge that will allow you to track
        applicants when advertising on our site. This technology is available for all clients that post jobs
        directly on Indeed.
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#280C65">
          What are the most Must-have skills in demand?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        The job market is constantly changing and technology-driven careers are becoming more and more popular.
         No matter what field you choose, having certain career skills can increase your likelihood of success.
         Determining which skills are most in-demand can be helpful as you select a career path. In this article,
         we will review some of the most valuable modern skills to develop while searching for a job.
      </div>
    </div>
  </div>




</div>

    </div>

  </div>

</div>



@endsection
