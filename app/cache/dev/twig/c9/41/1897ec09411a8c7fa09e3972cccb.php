<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_c9411897ec09411a8c7fa09e3972cccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   <header>
   <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section1.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />   
   </header>
   <section>   
   <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section2.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />   
   </section>
   <section>   
   <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section3.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />   
   </section>
   <section>   
   <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section4.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />   
   </section>
   <section>
   <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section5.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />      
   </section>
   <footer>
   <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/section6.jpg"), "html", null, true);
        echo "\" style=\"width:60%;margin:0 auto\" />   
   </footer>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  46 => 14,  40 => 11,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }
}
