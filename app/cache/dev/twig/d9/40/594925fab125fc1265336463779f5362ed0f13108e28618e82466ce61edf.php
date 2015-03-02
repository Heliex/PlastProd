<?php

/* ROGERPlastProdBundle:Client:suivi.html.twig */
class __TwigTemplate_d940594925fab125fc1265336463779f5362ed0f13108e28618e82466ce61edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("ROGERPlastProdBundle:PlastProd:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ROGERPlastProdBundle:PlastProd:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "<title>Client - Suivi - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<div class = \"suivi\">
\t<p>
\tSuivi de commande pour le Client : NOM + PRENOM + ADRESSE EN BASE<br />
\tID de votre commande : ID DE LA COMMANDE EN BASE <br />
\tDate de votre commande : DATE DE LA COMMANDE EN BASE <br />
\tPrix : PRIX EN BASE <br />
\t</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Client:suivi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
