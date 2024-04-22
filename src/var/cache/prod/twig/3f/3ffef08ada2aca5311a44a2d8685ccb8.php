<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ContaoCore/Backend/be_route_conflicts.html.twig */
class __TwigTemplate_525564778ce94fd27d9dae9dade5bed6 extends Template
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
        yield "<div class=\"clr widget\">
    <h3>";
        // line 3
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routeConflicts.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</h3>
    <div class=\"tl_info\">
        <p>";
        // line 5
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routeConflicts.1", [], "contao_tl_page"), "contao_html", null, true);
        yield "</p>
        <table class=\"tl_listing showColumns\">
            <tbody>
            <tr>
                <th class=\"tl_folder_tlist\">";
        // line 9
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MSC.id.0", [], "contao_default"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist\">";
        // line 10
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.title.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist\">";
        // line 11
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.type.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist\">";
        // line 12
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.alias.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist\">";
        // line 13
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routePath.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist\">";
        // line 14
        yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.routePriority.0", [], "contao_tl_page"), "contao_html", null, true);
        yield "</th>
                <th class=\"tl_folder_tlist tl_right_nowrap\"></th>
            </tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["conflicts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["conflict"]) {
            // line 18
            yield "                <tr class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) % 2)) ? ("even") : ("odd"));
            yield " hover-row\">
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 19
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "contao_html", null, true);
            yield "</td>
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 20
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "contao_html", null, true);
            yield "</td>
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 21
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("PTY." . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 21), "type", [], "any", false, false, false, 21)) . ".0"), [], "contao_default"), "contao_html", null, true);
            yield "</td>
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 22
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 22), "alias", [], "any", false, false, false, 22), "contao_html", null, true);
            yield "</td>
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 23
            yield CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "path", [], "any", false, false, false, 23);
            yield "</td>
                    <td colspan=\"1\" class=\"tl_file_list\">";
            // line 24
            yield $this->env->getFilter('escape')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 24), "routePriority", [], "any", false, false, false, 24), "contao_html", null, true);
            yield "</td>
                    <td class=\"tl_file_list tl_right_nowrap\">
                        <a
                            href=\"";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "editUrl", [], "any", false, false, false, 27);
            yield "\"
                            onclick=\"Backend.openModalIframe({title:'";
            // line 28
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.edit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)], "contao_tl_page"), "contao_html", null, true);
            yield "', url:this.href});return false\"
                            title=\"";
            // line 29
            yield $this->env->getFilter('escape')->getCallable()($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tl_page.edit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["conflict"], "page", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)], "contao_tl_page"), "contao_html", null, true);
            yield "\"
                            class=\"edit\"
                        ><img src=\"system/themes/flexible/icons/edit.svg\" width=\"16\" height=\"16\" alt=\"\"></a>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conflict'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "            </tbody>
        </table>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ContaoCore/Backend/be_route_conflicts.html.twig";
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
        return array (  155 => 35,  135 => 29,  131 => 28,  127 => 27,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  96 => 18,  79 => 17,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  46 => 5,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ContaoCore/Backend/be_route_conflicts.html.twig", "/var/www/html/vendor/contao/core-bundle/src/Resources/views/Backend/be_route_conflicts.html.twig");
    }
}
