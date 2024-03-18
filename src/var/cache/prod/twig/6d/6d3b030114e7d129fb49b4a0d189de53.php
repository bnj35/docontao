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

/* @ContaoCore/Backend/be_menu.html.twig */
class __TwigTemplate_c3047043aeccb300c2e2b144619dbc21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<nav id=\"tl_navigation\" aria-label=\"";
        echo $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.mainNavigation", [], "contao_default"), "contao_html", null, true);
        echo "\">
    <a href=\"";
        // line 3
        echo $this->env->getFilter('escape')->getCallable()($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "requestUri", [], "any", false, false, false, 3), "contao_html", null, true);
        echo "#skipMainNav\" class=\"invisible\">";
        echo $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.skipNavigation", [], "contao_default"), "contao_html", null, true);
        echo "</a>
    ";
        // line 4
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("be_menu");
        echo "
    <span id=\"skipMainNav\" class=\"invisible\"></span>
</nav>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_menu.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_menu.html.twig");
    }
}
