<?php

/* ROGERPlastProdBundle:PlastProd:userInfo.html.twig */
class __TwigTemplate_ae1acb23c2877551aea27c32d80fd280e37c9ab6bf5f8bbea070ddbd73bd4454 extends Twig_Template
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
        // line 2
        echo "<div class = \"content\">
\t<div class = \"connexion\">
\t\t\t\t";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "\t\t\t\t<p><span>Vous êtes connecté en tant que : ";
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> <br />Déconnexion</a>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t</span>
\t\t\t\t</p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:PlastProd:userInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 6,  25 => 5,  23 => 4,  19 => 2,);
    }
}
