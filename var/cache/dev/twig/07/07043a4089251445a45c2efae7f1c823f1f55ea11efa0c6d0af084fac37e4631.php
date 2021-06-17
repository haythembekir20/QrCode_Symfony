<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_a878de9ebab172e922db146a8ddb7afae792903a08bc2bf2ec71cc696142a3e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <style>
  h1{ font-size:80px;}
  h2{font-size:40px;color:black;}
  h3{font-size:30px;color:#DAA520;}
  h4,h6{color:black;}
  head{background-color:#47d1d1;}

}
.center{
  display:block;
  margin:auto;
}
</style>

<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
      <h1  style=\"color:;size:100px;\" align=\"center\">
          JustNotes
      </h1><br>
      <h2 align=\"center\" style=\"color:#8c8c8c\">Write Your Notes</h2>
    <div class=\"clear\"></div>
  </div>
  &nbsp;&nbsp;&nbsp;
  <section id=\"feature-1\" class=\"feature-section-1 pt-100\">
<div class=\"container\">
<div class=\"row align-items-center\">
<div class=\"col-lg-4 col-md-5\">
<div class=\"feature-content-wrapper\">
<div class=\"section-title\">
<h2 class=\"mb-20\"> <br class=\"d-none d-sm-block\"> Stay organized at work, school and life </h2>
<p class=\"mb-30\">Organize your work in unlimited notebooks, folders and subfolders. Create notebooks and projects in your own tree-like structure: Sections, Departments, Classes, Lectures, Grades, Drafts, Chapters, Research, et</p>

</div>
</div>
</div>
<div class=\"col-lg-3\">
<div class=\"feature-image text-lg-end\">
<img src=\"./SoftBit _ Bootstrap 5 SaaS Landing Page_files/undraw_portfolio_feedback_exfk.svg\" width=\"800px\" alt=\"\">
</div>
</div>
</div>
</div>
</section>



  


\t\t\t\t\t\t\t
<section id=\"home\" class=\"hero-section\">
  <div class=\"container\">
  <div class=\"row align-items-center\">
    <img src=\"./SoftBit _ Bootstrap 5 SaaS Landing Page_files/undraw_informed_decision_p2lh.svg\" alt=\"\">
  
  </div>
  </div>
  </section>

  
<br>
<br>
    <h2 align=\"center\"><U>JustNotes</U></h2>
      </h1>
\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Projet réalisée par <i class=\"icon-heart\" aria-hidden=\"true\"></i> Haythem bekir
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>    </div>
    <div class=\"clear\"></div>
  </div>  
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-angle-up\"></a>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}
 {% block title%}Home{% endblock %}
 {% block body %}
 <style>
  h1{ font-size:80px;}
  h2{font-size:40px;color:black;}
  h3{font-size:30px;color:#DAA520;}
  h4,h6{color:black;}
  head{background-color:#47d1d1;}

}
.center{
  display:block;
  margin:auto;
}
</style>

<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
      <h1  style=\"color:;size:100px;\" align=\"center\">
          JustNotes
      </h1><br>
      <h2 align=\"center\" style=\"color:#8c8c8c\">Write Your Notes</h2>
    <div class=\"clear\"></div>
  </div>
  &nbsp;&nbsp;&nbsp;
  <section id=\"feature-1\" class=\"feature-section-1 pt-100\">
<div class=\"container\">
<div class=\"row align-items-center\">
<div class=\"col-lg-4 col-md-5\">
<div class=\"feature-content-wrapper\">
<div class=\"section-title\">
<h2 class=\"mb-20\"> <br class=\"d-none d-sm-block\"> Stay organized at work, school and life </h2>
<p class=\"mb-30\">Organize your work in unlimited notebooks, folders and subfolders. Create notebooks and projects in your own tree-like structure: Sections, Departments, Classes, Lectures, Grades, Drafts, Chapters, Research, et</p>

</div>
</div>
</div>
<div class=\"col-lg-3\">
<div class=\"feature-image text-lg-end\">
<img src=\"./SoftBit _ Bootstrap 5 SaaS Landing Page_files/undraw_portfolio_feedback_exfk.svg\" width=\"800px\" alt=\"\">
</div>
</div>
</div>
</div>
</section>



  


\t\t\t\t\t\t\t
<section id=\"home\" class=\"hero-section\">
  <div class=\"container\">
  <div class=\"row align-items-center\">
    <img src=\"./SoftBit _ Bootstrap 5 SaaS Landing Page_files/undraw_informed_decision_p2lh.svg\" alt=\"\">
  
  </div>
  </div>
  </section>

  
<br>
<br>
    <h2 align=\"center\"><U>JustNotes</U></h2>
      </h1>
\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Projet réalisée par <i class=\"icon-heart\" aria-hidden=\"true\"></i> Haythem bekir
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>    </div>
    <div class=\"clear\"></div>
  </div>  
</footer>
<a href=\"#\" id=\"toTop\" class=\"fa fa-angle-up\"></a>




{% endblock %}", "default/index.html.twig", "D:\\work\\Symfony_Project\\templates\\default\\index.html.twig");
    }
}
