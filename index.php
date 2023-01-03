<?php require_once("_layout.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="th">

<?php render_head_tag(); ?>

<body>
  <!-- HEADER -->
  <?php render_header("Home"); ?>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">
          เครื่องมือการเงินสำหรับคนตัวเล็ก
        </h1>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Ut volutpat elit diam, hendrerit euismod enim efficitur eu. 
          Proin facilisis a metus non posuere. Fusce vitae diam sapien. 
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
            OK
          </button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">
            ???
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--
  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Icon grid</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#bootstrap" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#cpu-fill" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#calendar3" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#home" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#speedometer2" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#toggles2" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#geo-fill" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#tools" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Features with title</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">
          Left-aligned title explaining these awesome features
        </h3>
        <p class="text-muted">
          Paragraph of text beneath the heading to explain the heading. We'll
          add onto it with another sentence and probably just keep going until
          we run out of words.
        </p>
        <a href="#" class="btn btn-primary btn-lg">Primary button</a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Featured title</h4>
            <p class="text-muted">
              Paragraph of text beneath the heading to explain the heading.
            </p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#gear-fill" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Featured title</h4>
            <p class="text-muted">
              Paragraph of text beneath the heading to explain the heading.
            </p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Featured title</h4>
            <p class="text-muted">
              Paragraph of text beneath the heading to explain the heading.
            </p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#table" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Featured title</h4>
            <p class="text-muted">
              Paragraph of text beneath the heading to explain the heading.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  <?php render_footer("Home"); ?>

  
</body>

</html>