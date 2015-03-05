<?php

/* ::layout.html.twig */
class __TwigTemplate_990f4de86748c85e5c017d62ffc9c9217d8b69b82a12689f93023297bced8211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta charset = \"UTF-8\" />
\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t
\t\t";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "\t\t
\t\t";
        // line 17
        $this->displayBlock('js', $context, $blocks);
        // line 21
        echo "\t</head>
\t<body>
\t\t<header class = \"header\">
\t\t\t<div class = \"logo\"><a href = \"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_homepage");
        echo "\">
\t\t\t<img src = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/images/logo.png"), "html", null, true);
        echo "\"/>
\t\t\t</div></a>
\t\t\t<div class = \"notifs\">
\t\t\t\t<div  class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t  <!-- Wrapper for slides -->
\t\t\t\t\t<div class=\"carousel-inner\" >
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t<p>Notif n°1</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<p>Notif n°2</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<p>Notif n°3</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<p>Notif n°4</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Cette ligne permet d'allez chercher un controller pour qu'il me fournisse un template. ( le template d'infos d'utilisateur C-A-D si l'utilateur est connecté affiché son pseudo sinon affiché invité) !-->
\t\t\t";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ROGERPlastProdBundle:PlastProd:connexion"));
        echo "
\t\t</header>
\t<div class = \"left-container\">
\t\t<a class = \"liens\" href = \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_clients");
        echo " \"><div class = \"btn-clients\">
\t\t</div></a>
\t\t<a class = \"liens\" href = \"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_production");
        echo " \"><div class = \"btn-production\">
\t\t</div></a>
\t\t<a class = \"liens\" href = \"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_fournisseurs");
        echo " \"><div class = \"btn-fournisseurs\">
\t\t</div></a>
\t\t<a class = \"liens\" href = \"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("roger_plast_prod_fournisseurs");
        echo " \"><div class = \"btn-stocks\">
\t\t</div></a>
\t</div>
\t";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t<footer>
\t</footer>
\t</body>
</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t PlastProd
\t\t";
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        // line 12
        echo "\t\t<link rel = \"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/css/layout.css"), "html", null, true);
        echo "\"/>
\t\t<link rel = \"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/css/form.css"), "html", null, true);
        echo "\"/>
\t\t";
    }

    // line 17
    public function block_js($context, array $blocks = array())
    {
        // line 18
        echo "\t\t<script src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/PlastProd/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  154 => 59,  148 => 19,  143 => 18,  140 => 17,  134 => 14,  130 => 13,  125 => 12,  122 => 11,  117 => 8,  114 => 7,  105 => 61,  103 => 59,  97 => 56,  92 => 54,  87 => 52,  82 => 50,  76 => 47,  51 => 25,  47 => 24,  42 => 21,  40 => 17,  37 => 16,  35 => 11,  32 => 10,  30 => 7,  23 => 2,);
    }
}
