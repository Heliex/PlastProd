<?php

/* ROGERPlastProdBundle:Fournisseurs:fournisseurs.html.twig */
class __TwigTemplate_330ee5bb28510f3c32cfa196185ef61f142827df2e111ffb98f606fa6a0742cd extends Twig_Template
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
        echo "<title>Fournisseurs - PlastProd </title>
";
    }

    // line 9
    public function block_actions($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"fournisseurs\">
\t<table>
\t\t<tr>
\t\t\t<td>Nom</td>
\t\t\t<td>Adresse</td>
\t\t\t<td>Numéro de téléphone</td>
\t\t\t<td>Représentant de l'entreprise</td>
\t\t</tr>
\t\t<tr>
\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 20
            echo "\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adresse", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "numero", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "representant", array()), "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</tr>
\t</table>
</div>

";
    }

    public function getTemplateName()
    {
        return "ROGERPlastProdBundle:Fournisseurs:fournisseurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  76 => 23,  72 => 22,  68 => 21,  63 => 20,  59 => 19,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
