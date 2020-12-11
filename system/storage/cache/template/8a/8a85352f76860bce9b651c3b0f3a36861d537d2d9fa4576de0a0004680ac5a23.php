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

/* default/template/common/header.twig */
class __TwigTemplate_46d2be2612651121f8d642b30f9168501f395d2b18f6a3fc804baada8efe68b6 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">

<script src=\"https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js\"></script>
<link href=\"./catalog/view/dist/index.min.css?ver=";
        // line 28
        echo ($context["version"] ?? null);
        echo "\" rel=\"stylesheet\">


<link href=\"./catalog/view/theme/default/assets/css/three-dots.css?ver=";
        // line 31
        echo ($context["version"] ?? null);
        echo "\" rel=\"stylesheet\">


";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 35
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 35);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 35);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 35);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 38
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<script src=\"catalog/view/javascript/common.js?ver=";
        echo ($context["version"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 42);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 42);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 45
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</head>
<body style=\"opacity: 0\">
   <div id=\"cover-plate\" style=\"opacity:0;z-index: -2\"></div>
";
        // line 90
        echo "


<script>



let isDisplay = true

if (sessionStorage.getItem('loading-screen')) {
  isDisplay = false
}

\$(\"body\").append(`<loading-screen class=\"loading-screen\"\${isDisplay ? '' : ' style=\"display: none\"'}><div class=\"loading-screen__content wrapper\"><div class=\"loading-screen__svg\"><svg viewBox=\"0 0 203 86\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><defs><mask id=\"mask-loading\"><rect x=\"0\" y=\"100%\" width=\"100%\" height=\"100%\" fill=\"white\"></rect></mask></defs><g><path d=\"M8.09609 85.6368L5.81622 82.1861H3.38753V85.6368H0V71.7891H6.73423C9.56726 71.7891 11.6983 74.2178 11.6983 77.2444C11.6983 79.2464 10.6973 80.6688 9.22614 81.4591L12.2725 85.6342L8.09609 85.6368ZM3.38753 79.141H6.20081C7.32955 79.141 8.2673 78.3929 8.2673 77.2444C8.2673 76.702 8.05203 76.1818 7.66876 75.7981C7.28549 75.4143 6.76557 75.1984 6.2232 75.1977H3.38753V79.141Z\" fill=\"#C4BFA6\"></path><path d=\"M29.704 83.7416H22.9869L22.0491 85.6368H18.3047L25.1904 71.7891H27.7047L34.3296 85.6368H30.6418L29.704 83.7416ZM28.4041 81.0336L26.3376 76.5832L24.3764 81.0336H28.4041Z\" fill=\"#C4BFA6\"></path><path d=\"M54.121 78.6906C54.1233 79.6016 53.9458 80.504 53.5988 81.3464C53.2519 82.1887 52.7422 82.9543 52.0989 83.5994C51.4556 84.2445 50.6915 84.7564 49.8501 85.1058C49.0088 85.4552 48.1068 85.6352 47.1958 85.6355H40.6328V71.7891H47.1958C51.4355 71.7891 54.121 74.8776 54.121 78.6906ZM50.7967 78.6906C50.7967 76.6227 49.2623 75.1121 47.5159 75.1121H43.9598V82.3125H47.5159C49.2412 82.2467 50.7967 80.7584 50.7967 78.6906Z\" fill=\"#C4BFA6\"></path><path d=\"M74.2971 71.7891V78.5852C74.2971 83.0382 71.1874 86.0003 67.2678 86.0003C63.3258 86.0003 60.2148 83.0382 60.2148 78.5852V71.7891H63.6024V78.5852C63.6024 80.7584 65.1368 82.5707 67.2678 82.5707C69.3751 82.5707 70.9095 80.7584 70.9095 78.5852V71.7891H74.2971Z\" fill=\"#C4BFA6\"></path><path d=\"M94.497 83.0363H94.476C93.7332 84.0372 92.7465 84.8313 91.61 85.3429C90.4735 85.8546 89.225 86.0668 87.9832 85.9594C86.7415 85.852 85.5479 85.4286 84.5161 84.7293C83.4844 84.0301 82.6487 83.0785 82.0888 81.9649C81.5289 80.8514 81.2633 79.6131 81.3174 78.3679C81.3715 77.1227 81.7434 75.912 82.3978 74.8512C83.0521 73.7904 83.9671 72.9148 85.0556 72.3077C86.1441 71.7006 87.3699 71.3822 88.6163 71.3828C91.0252 71.3828 92.985 72.3825 94.3284 74.1948L91.7904 75.8148C90.9396 75.0245 90.0018 74.5767 88.6163 74.5767C87.9386 74.5779 87.2718 74.7469 86.6755 75.0687C86.0791 75.3905 85.5717 75.8549 85.1986 76.4206C84.8255 76.9863 84.5984 77.6356 84.5374 78.3105C84.4765 78.9854 84.5837 79.6649 84.8494 80.2882C85.1151 80.9116 85.5311 81.4594 86.0602 81.8828C86.5893 82.3062 87.215 82.5919 87.8815 82.7145C88.548 82.837 89.2344 82.7926 89.8795 82.5851C90.5246 82.3777 91.1083 82.0137 91.5784 81.5256V80.0769H87.3809V77.4124H94.4931L94.497 83.0363Z\" fill=\"#C4BFA6\"></path><path d=\"M111.326 83.7416H104.62L103.687 85.6368H99.9297L106.811 71.7891H109.326L115.955 85.6368H112.267L111.326 83.7416ZM110.028 81.0336L107.964 76.5832L106.001 81.0336H110.028Z\" fill=\"#C4BFA6\"></path><path d=\"M145.397 83.036H145.377C144.635 84.0369 143.648 84.8312 142.512 85.3431C141.376 85.855 140.128 86.0676 138.886 85.9606C137.644 85.8536 136.451 85.4306 135.419 84.7318C134.387 84.033 133.551 83.0818 132.991 81.9686C132.43 80.8554 132.164 79.6173 132.218 78.3722C132.271 77.127 132.642 75.9163 133.296 74.8553C133.95 73.7943 134.864 72.9182 135.953 72.3106C137.041 71.7029 138.266 71.3839 139.512 71.3838C141.923 71.3838 143.88 72.3834 145.221 74.1957L142.688 75.8158C141.838 75.0255 140.895 74.5777 139.512 74.5777C138.835 74.5789 138.168 74.7479 137.572 75.0697C136.975 75.3914 136.468 75.8559 136.095 76.4216C135.722 76.9873 135.494 77.6366 135.434 78.3115C135.373 78.9863 135.48 79.6658 135.745 80.2892C136.011 80.9126 136.427 81.4604 136.956 81.8838C137.485 82.3072 138.111 82.5929 138.778 82.7154C139.444 82.838 140.13 82.7936 140.776 82.5861C141.421 82.3787 142.004 82.0147 142.474 81.5266V80.0778H138.277V77.4121H145.389L145.397 83.036Z\" fill=\"#C4BFA6\"></path><path d=\"M161.123 85.6368L158.841 82.1861H156.416V85.6368H153.027V71.7891H159.762C162.595 71.7891 164.726 74.2178 164.726 77.2444C164.726 79.2464 163.725 80.6688 162.251 81.4591L165.3 85.6342L161.123 85.6368ZM156.416 79.141H159.229C160.358 79.141 161.293 78.3929 161.293 77.2444C161.294 76.9757 161.241 76.7096 161.138 76.4613C161.035 76.2129 160.885 75.9873 160.695 75.7972C160.505 75.6071 160.279 75.4564 160.031 75.3535C159.783 75.2506 159.517 75.1977 159.248 75.1977H156.416V79.141Z\" fill=\"#C4BFA6\"></path><path d=\"M175.884 74.7709V77.2418H181.485V80.2052H175.884V82.676H182.975V85.6368H172.553V71.7891H182.975V74.7709H175.884Z\" fill=\"#C4BFA6\"></path><path d=\"M202.369 85.6368H190.738V82.2467L197.703 75.0238H190.738V71.7891H202.369V75.0264L195.125 82.2493H202.369V85.6368Z\" fill=\"#C4BFA6\"></path><path d=\"M174.166 68.6311C174.147 68.5781 174.132 68.524 174.12 68.4691C174.016 68.0345 174.217 67.6407 174.488 67.3101C174.673 67.0713 174.933 66.9019 175.226 66.8294C175.351 66.7952 175.484 66.7965 175.609 66.8333C175.733 66.87 175.845 66.9407 175.932 67.0375C176.133 67.2324 176.234 67.1613 176.482 67.3101C177.307 67.8027 176.987 68.8643 176.498 69.2857C176.224 69.5215 175.745 69.7098 175.463 69.5492C175.239 69.4174 174.936 69.4728 174.693 69.3819C174.405 69.2699 174.262 68.9196 174.166 68.6311Z\" fill=\"#C4BFA6\"></path><path d=\"M178.741 68.944C178.845 69.116 178.986 69.2629 179.153 69.3744C179.32 69.4859 179.51 69.5593 179.709 69.5894C179.821 69.6117 179.937 69.6171 180.051 69.6052C180.562 69.5367 180.923 69.3273 181.115 68.9967C181.308 68.6661 181.352 68.3817 181.283 67.918C181.22 67.6484 181.078 67.4037 180.874 67.216C180.784 67.1191 180.666 67.0509 180.537 67.0198C180.382 66.9895 180.245 67.0935 180.092 67.0896C179.908 67.0896 179.755 66.9908 179.565 66.9869C179.091 66.975 179.054 67.1607 178.795 67.4874C178.475 67.9022 178.498 68.4844 178.741 68.944Z\" fill=\"#C4BFA6\"></path><path d=\"M91.824 45.8177C91.6106 45.8704 91.3973 45.9138 91.1839 45.9494C88.2007 46.4393 85.178 45.6241 82.2541 44.8628C79.3302 44.1015 76.2614 43.3811 73.3164 44.0568C71.4725 44.4822 69.6391 45.4529 67.7728 45.1104C66.2832 44.8325 65.0504 43.7275 64.2812 42.4223C63.5121 41.117 63.1433 39.6208 62.8246 38.1391C60.9332 29.3213 60.5183 20.0425 62.8891 11.3405C63.6095 8.6945 64.6355 6.034 66.5572 4.07814C69.3138 1.27276 73.4573 0.358706 77.3809 0.0939729C80.5551 -0.122028 83.8109 0.0123139 86.8059 1.08573C89.801 2.15915 92.526 4.26516 93.8102 7.17327C95.2971 10.5516 94.6926 14.4251 94.4015 18.105C94.0551 22.5067 94.2079 26.9874 95.3406 31.2547C96.1085 34.1523 97.8615 37.5662 97.3347 40.6231C96.8697 43.3166 94.3765 45.1881 91.824 45.8177Z\" fill=\"#C4BFA6\"></path><path d=\"M106.039 6.38219C106.573 5.78144 107.158 5.22797 107.787 4.72794C111.738 1.58671 117.12 0.883387 122.166 1.1231C124.931 1.2548 127.75 1.64993 130.179 2.97491C132.607 4.29989 134.592 6.69302 134.796 9.45098C135.015 12.3854 133.291 15.5517 134.698 18.1371C135.713 20.0061 137.99 20.7713 139.451 22.3215C143.733 26.8707 138.808 35.9915 135.276 39.5436C132.249 42.5685 128.301 44.4991 124.056 45.0306C122.133 45.265 120.183 45.2057 118.26 45.0082C114.889 44.6605 111.463 43.8452 108.712 41.8643C106.143 40.0204 104.328 37.2545 103.219 34.2858C102.11 31.3171 101.661 28.1496 101.436 24.9925C101.173 21.3139 101.212 17.5734 102.129 14.0028C102.84 11.2146 104.132 8.52245 106.039 6.38219Z\" fill=\"#C4BFA6\"></path></g><g mask=\"url(#mask-loading)\"><path d=\"M8.09609 85.6368L5.81622 82.1861H3.38753V85.6368H0V71.7891H6.73423C9.56726 71.7891 11.6983 74.2178 11.6983 77.2444C11.6983 79.2464 10.6973 80.6688 9.22614 81.4591L12.2725 85.6342L8.09609 85.6368ZM3.38753 79.141H6.20081C7.32955 79.141 8.2673 78.3929 8.2673 77.2444C8.2673 76.702 8.05203 76.1818 7.66876 75.7981C7.28549 75.4143 6.76557 75.1984 6.2232 75.1977H3.38753V79.141Z\" fill=\"#363636\"></path><path d=\"M29.704 83.7416H22.9869L22.0491 85.6368H18.3047L25.1904 71.7891H27.7047L34.3296 85.6368H30.6418L29.704 83.7416ZM28.4041 81.0336L26.3376 76.5832L24.3764 81.0336H28.4041Z\" fill=\"#363636\"></path><path d=\"M54.121 78.6906C54.1233 79.6016 53.9458 80.504 53.5988 81.3464C53.2519 82.1887 52.7422 82.9543 52.0989 83.5994C51.4556 84.2445 50.6915 84.7564 49.8501 85.1058C49.0088 85.4552 48.1068 85.6352 47.1958 85.6355H40.6328V71.7891H47.1958C51.4355 71.7891 54.121 74.8776 54.121 78.6906ZM50.7967 78.6906C50.7967 76.6227 49.2623 75.1121 47.5159 75.1121H43.9598V82.3125H47.5159C49.2412 82.2467 50.7967 80.7584 50.7967 78.6906Z\" fill=\"#363636\"></path><path d=\"M74.2971 71.7891V78.5852C74.2971 83.0382 71.1874 86.0003 67.2678 86.0003C63.3258 86.0003 60.2148 83.0382 60.2148 78.5852V71.7891H63.6024V78.5852C63.6024 80.7584 65.1368 82.5707 67.2678 82.5707C69.3751 82.5707 70.9095 80.7584 70.9095 78.5852V71.7891H74.2971Z\" fill=\"#363636\"></path><path d=\"M94.497 83.0363H94.476C93.7332 84.0372 92.7465 84.8313 91.61 85.3429C90.4735 85.8546 89.225 86.0668 87.9832 85.9594C86.7415 85.852 85.5479 85.4286 84.5161 84.7293C83.4844 84.0301 82.6487 83.0785 82.0888 81.9649C81.5289 80.8514 81.2633 79.6131 81.3174 78.3679C81.3715 77.1227 81.7434 75.912 82.3978 74.8512C83.0521 73.7904 83.9671 72.9148 85.0556 72.3077C86.1441 71.7006 87.3699 71.3822 88.6163 71.3828C91.0252 71.3828 92.985 72.3825 94.3284 74.1948L91.7904 75.8148C90.9396 75.0245 90.0018 74.5767 88.6163 74.5767C87.9386 74.5779 87.2718 74.7469 86.6755 75.0687C86.0791 75.3905 85.5717 75.8549 85.1986 76.4206C84.8255 76.9863 84.5984 77.6356 84.5374 78.3105C84.4765 78.9854 84.5837 79.6649 84.8494 80.2882C85.1151 80.9116 85.5311 81.4594 86.0602 81.8828C86.5893 82.3062 87.215 82.5919 87.8815 82.7145C88.548 82.837 89.2344 82.7926 89.8795 82.5851C90.5246 82.3777 91.1083 82.0137 91.5784 81.5256V80.0769H87.3809V77.4124H94.4931L94.497 83.0363Z\" fill=\"#363636\"></path><path d=\"M111.326 83.7416H104.62L103.687 85.6368H99.9297L106.811 71.7891H109.326L115.955 85.6368H112.267L111.326 83.7416ZM110.028 81.0336L107.964 76.5832L106.001 81.0336H110.028Z\" fill=\"#363636\"></path><path d=\"M145.397 83.036H145.377C144.635 84.0369 143.648 84.8312 142.512 85.3431C141.376 85.855 140.128 86.0676 138.886 85.9606C137.644 85.8536 136.451 85.4306 135.419 84.7318C134.387 84.033 133.551 83.0818 132.991 81.9686C132.43 80.8554 132.164 79.6173 132.218 78.3722C132.271 77.127 132.642 75.9163 133.296 74.8553C133.95 73.7943 134.864 72.9182 135.953 72.3106C137.041 71.7029 138.266 71.3839 139.512 71.3838C141.923 71.3838 143.88 72.3834 145.221 74.1957L142.688 75.8158C141.838 75.0255 140.895 74.5777 139.512 74.5777C138.835 74.5789 138.168 74.7479 137.572 75.0697C136.975 75.3914 136.468 75.8559 136.095 76.4216C135.722 76.9873 135.494 77.6366 135.434 78.3115C135.373 78.9863 135.48 79.6658 135.745 80.2892C136.011 80.9126 136.427 81.4604 136.956 81.8838C137.485 82.3072 138.111 82.5929 138.778 82.7154C139.444 82.838 140.13 82.7936 140.776 82.5861C141.421 82.3787 142.004 82.0147 142.474 81.5266V80.0778H138.277V77.4121H145.389L145.397 83.036Z\" fill=\"#363636\"></path><path d=\"M161.123 85.6368L158.841 82.1861H156.416V85.6368H153.027V71.7891H159.762C162.595 71.7891 164.726 74.2178 164.726 77.2444C164.726 79.2464 163.725 80.6688 162.251 81.4591L165.3 85.6342L161.123 85.6368ZM156.416 79.141H159.229C160.358 79.141 161.293 78.3929 161.293 77.2444C161.294 76.9757 161.241 76.7096 161.138 76.4613C161.035 76.2129 160.885 75.9873 160.695 75.7972C160.505 75.6071 160.279 75.4564 160.031 75.3535C159.783 75.2506 159.517 75.1977 159.248 75.1977H156.416V79.141Z\" fill=\"#363636\"></path><path d=\"M175.884 74.7709V77.2418H181.485V80.2052H175.884V82.676H182.975V85.6368H172.553V71.7891H182.975V74.7709H175.884Z\" fill=\"#363636\"></path><path d=\"M202.369 85.6368H190.738V82.2467L197.703 75.0238H190.738V71.7891H202.369V75.0264L195.125 82.2493H202.369V85.6368Z\" fill=\"#363636\"></path><path d=\"M174.166 68.6311C174.147 68.5781 174.132 68.524 174.12 68.4691C174.016 68.0345 174.217 67.6407 174.488 67.3101C174.673 67.0713 174.933 66.9019 175.226 66.8294C175.351 66.7952 175.484 66.7965 175.609 66.8333C175.733 66.87 175.845 66.9407 175.932 67.0375C176.133 67.2324 176.234 67.1613 176.482 67.3101C177.307 67.8027 176.987 68.8643 176.498 69.2857C176.224 69.5215 175.745 69.7098 175.463 69.5492C175.239 69.4174 174.936 69.4728 174.693 69.3819C174.405 69.2699 174.262 68.9196 174.166 68.6311Z\" fill=\"#363636\"></path><path d=\"M178.741 68.944C178.845 69.116 178.986 69.2629 179.153 69.3744C179.32 69.4859 179.51 69.5593 179.709 69.5894C179.821 69.6117 179.937 69.6171 180.051 69.6052C180.562 69.5367 180.923 69.3273 181.115 68.9967C181.308 68.6661 181.352 68.3817 181.283 67.918C181.22 67.6484 181.078 67.4037 180.874 67.216C180.784 67.1191 180.666 67.0509 180.537 67.0198C180.382 66.9895 180.245 67.0935 180.092 67.0896C179.908 67.0896 179.755 66.9908 179.565 66.9869C179.091 66.975 179.054 67.1607 178.795 67.4874C178.475 67.9022 178.498 68.4844 178.741 68.944Z\" fill=\"#363636\"></path><path d=\"M91.824 45.8177C91.6106 45.8704 91.3973 45.9138 91.1839 45.9494C88.2007 46.4393 85.178 45.6241 82.2541 44.8628C79.3302 44.1015 76.2614 43.3811 73.3164 44.0568C71.4725 44.4822 69.6391 45.4529 67.7728 45.1104C66.2832 44.8325 65.0504 43.7275 64.2812 42.4223C63.5121 41.117 63.1433 39.6208 62.8246 38.1391C60.9332 29.3213 60.5183 20.0425 62.8891 11.3405C63.6095 8.6945 64.6355 6.034 66.5572 4.07814C69.3138 1.27276 73.4573 0.358706 77.3809 0.0939729C80.5551 -0.122028 83.8109 0.0123139 86.8059 1.08573C89.801 2.15915 92.526 4.26516 93.8102 7.17327C95.2971 10.5516 94.6926 14.4251 94.4015 18.105C94.0551 22.5067 94.2079 26.9874 95.3406 31.2547C96.1085 34.1523 97.8615 37.5662 97.3347 40.6231C96.8697 43.3166 94.3765 45.1881 91.824 45.8177Z\" fill=\"#363636\"></path><path d=\"M106.039 6.38219C106.573 5.78144 107.158 5.22797 107.787 4.72794C111.738 1.58671 117.12 0.883387 122.166 1.1231C124.931 1.2548 127.75 1.64993 130.179 2.97491C132.607 4.29989 134.592 6.69302 134.796 9.45098C135.015 12.3854 133.291 15.5517 134.698 18.1371C135.713 20.0061 137.99 20.7713 139.451 22.3215C143.733 26.8707 138.808 35.9915 135.276 39.5436C132.249 42.5685 128.301 44.4991 124.056 45.0306C122.133 45.265 120.183 45.2057 118.26 45.0082C114.889 44.6605 111.463 43.8452 108.712 41.8643C106.143 40.0204 104.328 37.2545 103.219 34.2858C102.11 31.3171 101.661 28.1496 101.436 24.9925C101.173 21.3139 101.212 17.5734 102.129 14.0028C102.84 11.2146 104.132 8.52245 106.039 6.38219Z\" fill=\"#363636\"></path></g></svg></div></div></loading-screen>`);




\$(\"body\").css(\"opacity\", 1);




</script>












<navigation-block class=\"navigation-block standard-layout opened\">
   <div class=\"navigation-block__logo\"><a href=\"./\"><img src=\"./catalog/view/theme/default/assets/images/logo-dark.svg\"></a></div>
   <div class=\"navigation-block__items dark\">
      <a class=\"navigation-block__item\" href=\"";
        // line 129
        echo ($context["categoriesLink"] ?? null);
        echo "\">Catalogue</a>
      <a class=\"navigation-block__item\" href=\"https://radugagrez.palemiya.com/about\">About us</a>
      <a class=\"navigation-block__item\" href=\"https://radugagrez.palemiya.com/stories\">Stories</a>
      <a class=\"navigation-block__item\" href=\"https://radugagrez.palemiya.com/stockist\">Stockist</a>
      <a class=\"navigation-block__item navigation-block__search-icon\">
         <span>Search </span>
         <img src=\"./catalog/view/theme/default/assets/images/Search_Icon.svg\">
      </a>
   </div>
   <div class=\"navigation-block__cart\">
      <div class=\"navigation-block__cart-icon dark ";
        // line 139
        if ((($context["count"] ?? null) == 0)) {
            echo "nullable";
        }
        echo "\">
      ";
        // line 140
        if ((($context["count"] ?? null) > 0)) {
            // line 141
            echo "      ";
            echo ($context["count"] ?? null);
            echo "
      ";
        }
        // line 143
        echo "      </div>
   </div>
   <div class=\"navigation-block__menu\"> <img src=\"./catalog/view/theme/default/assets/images/menu-dark.svg\"></div>
</navigation-block>

<span id=\"floating-cart-wrapper\">
  ";
        // line 149
        echo ($context["cart"] ?? null);
        echo "
</span>


<floating-search class=\"floating-search\" style=\"visibility: hidden; opacity: 0;\">
   <div class=\"floating-search__search-wrapper\">
      <div class=\"floating-search__search-form-wrapper\">
         <img class=\"floating-search__close-icon\" src=\"./catalog/view/theme/default/assets/images/close.svg\">
         
         

         

         <input-search-field id=\"search\" class=\"input-search-field\">
            <input class=\"input-search-field__input\" type=\"text\" name=\"search\" placeholder=\"Name\">
            <button class=\"input-search-field__search-icon\" style=\"display:inline-block\">
            
               <img  src=\"./catalog/view/theme/default/assets/images/search-dark.svg?ver=1.2\" alt=\"\" role=\"presentation\">
            </button>
            <div class=\"input-search-field__error\"></div>
         </input-search-field>


         <div class=\"floating-search__suggested-title\">Suggested</div>
         
         
         <div class=\"floating-search__suggested-list\">
            ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recomended"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recomend"]) {
            // line 177
            echo "               <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recomend"], "href", [], "any", false, false, false, 177);
            echo "}\" class=\"floating-search__suggested-item dark\">";
            echo twig_get_attribute($this->env, $this->source, $context["recomend"], "name", [], "any", false, false, false, 177);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recomend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "         </div>


      </div>
   </div>
</floating-search>



<floating-menu class=\"floating-menu\">
   <div class=\"floating-menu__menu-wrapper\">
      <div class=\"floating-menu__header\"><img class=\"floating-menu__back-icon\" src=\"./catalog/view/theme/default/assets/images/arrow-left-dark.svg\" alt=\"\" role=\"presentation\"><img class=\"floating-menu__close-icon\" src=\"./catalog/view/theme/default/assets/images/close.svg\" alt=\"\" role=\"presentation\"></div>
      <div class=\"floating-menu__menu-list\">
         <div class=\"floating-menu__menu-item menu-item-catalogue\" animation-infinity=\"fade-right\", animation-delay=\"0\">Catalogue</div>
         <a href=\"https://radugagrez.palemiya.com/about\" class=\"floating-menu__menu-item dark\" animation-infinity=\"fade-right\" animation-delay=\"0.1\">About us</a>
         <a href=\"https://radugagrez.palemiya.com/stories\" class=\"floating-menu__menu-item dark\" animation-infinity=\"fade-right\" animation-delay=\"0.15\">Stories</a>
         <a href=\"https://radugagrez.palemiya.com/stockist\" class=\"floating-menu__menu-item dark\" animation-infinity=\"fade-right\" animation-delay=\"0.2\">Stockist</a>
         <a href=\"https://radugagrez.palemiya.com/contacts\" class=\"floating-menu__menu-item dark\" animation-infinity=\"fade-right\" animation-delay=\"0.25\">CONTACT US</a>
         <div class=\"floating-menu__menu-item navigation-block__search-icon\" animation-infinity=\"fade-right\" animation-delay=\"0.3\">SEARCH</div>
      </div>
      <div class=\"floating-menu__decorative-image\"><img class=\"floating-menu__decorative-icon\" src=\"./catalog/view/theme/default/assets/images/menu-image.png\"></div>
      <div class=\"floating-menu__logo\"><a href=\"./index.html\"><img src=\"./catalog/view/theme/default/assets/images/logo-dark.svg\"></a></div>
      <div class=\"floating-menu__catalogue-list-wrapper\">
         <catalogue-list class=\"catalogue-list\">
            <div class=\"catalogue-list__wrapper\">
               <div class=\"catalogue-list__title\" animation-infinity=\"fade-right\", animation-delay=\"0\">Category</div>
               <div class=\"catalogue-list__separator\" animation-infinity=\"fade-right\", animation-delay=\"0.05\"></div>

               ";
        // line 207
        $context["time"] = 0.10000000000000001;
        // line 208
        echo "            
               ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 210
            echo "               
                  <a class=\"catalogue-list__item dark\" href=\"";
            // line 211
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 211);
            echo "\" 
                  animation-infinity=\"fade-right\", animation-delay=\"";
            // line 212
            echo ($context["time"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 212);
            echo "</a>
                  ";
            // line 213
            $context["time"] = (($context["time"] ?? null) + 0.029999999999999999);
            // line 214
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "     
            </div>
            <div class=\"catalogue-list__wrapper\">
               <div class=\"catalogue-list__title\" animation-infinity=\"fade-right\", animation-delay=\"";
        // line 217
        echo ($context["time"] ?? null);
        echo "\">Collection</div>
               ";
        // line 218
        $context["time"] = (($context["time"] ?? null) + 0.029999999999999999);
        // line 219
        echo "               <div class=\"catalogue-list__separator\" animation-infinity=\"fade-right\", animation-delay=\"";
        echo ($context["time"] ?? null);
        echo "\"></div>
               ";
        // line 220
        $context["time"] = (($context["time"] ?? null) + 0.029999999999999999);
        // line 221
        echo "               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesCollection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 222
            echo "                  <a class=\"catalogue-list__item dark\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 222);
            echo "\"
                  animation-infinity=\"fade-right\", animation-delay=\"";
            // line 223
            echo ($context["time"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 223);
            echo "</a>
                   ";
            // line 224
            $context["time"] = (($context["time"] ?? null) + 0.029999999999999999);
            // line 225
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
               
               

            </div>
            <div class=\"catalogue-list__wrapper\">
               <a class=\"catalogue-list__title dark\" href=\"";
        // line 231
        echo ($context["categoriesShop"] ?? null);
        echo "\" 
               animation-infinity=\"fade-right\", animation-delay=\"";
        // line 232
        echo ($context["time"] ?? null);
        echo "\">Shop All</a>
            </div>
         </catalogue-list>
      </div>
   </div>
</floating-menu>

 

";
        // line 242
        echo "

<cookies-form class=\"cookies-form\"><div class=\"cookies-form__wrapper\"><div class=\"cookies-form__content\">This website uses cookies to give you the best shopping experience. By continuing to browse the website we assume that you agree to the use of such cookies.</div><div class=\"cookies-form__accept\">Accept</div></div></cookies-form>



";
        // line 248
        echo ($context["menu"] ?? null);
        echo "


";
        // line 255
        echo "

<promocode-modal class=\"promocode-modal\">
    <div class=\"promocode-modal__smoke-wrapper\">
        <div class=\"promocode-modal__form-wrapper\">
            <div class=\"promocode-modal__close-wrapper\">
                <img class=\"promocode-modal__img promocode-close\" src=\"./catalog/view/theme/default/assets/images/close.svg\" alt=\"\" role=\"presentation\">
            </div>
            <div class=\"promocode-modal__modal-title\">Apply a promocode</div>
            <div class=\"promocode-modal__promocode-field\"> 
                <input type=\"text\" placeholder=\"Promocode\" id=\"input-coupon-modal\">
                <div class=\"promocode-modal__promocode-field-error\" >Error</div>
              </div>
            <standart-button class=\"standart-button\" id=\"button-coupon-modal\">Apply</standart-button>
        </div>
    </div>
</promocode-modal>

<script>

\$('#button-coupon-modal').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('#input-coupon-modal').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {

     
      if(json[\"error\"]){
        \$(\".promocode-modal__promocode-field-error\").html(json[\"error\"]);
        \$(\".promocode-modal__promocode-field-error\").addClass(\"showed\");
      } else {
         \$(\".promocode-modal\").removeClass(\"showed\");
        console.log(json);
        \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);
      }
      

\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});




</script>

<script>

\$('#button-coupon-modal').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('#input-coupon-modal').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {

     
      if(json[\"error\"]){
        \$(\".promocode-modal__promocode-field-error\").html(json[\"error\"]);
        \$(\".promocode-modal__promocode-field-error\").addClass(\"showed\");
      } else {
         \$(\".promocode-modal\").removeClass(\"showed\");
        console.log(json);
        \$(\".checkout-cart__total-value\").html(json[\"totalPrice\"]);

        \$(\"#coupon-wrapper\").show();
        \$(\"#coupon-label\").html(json[\"coupon_label\"]);
        \$(\"#coupon-value\").html(json[\"coupon_value\"]);

        \$(\"#coupon-wrapper-mobile\").show();
        \$(\"#coupon-label-mobile\").html(json[\"coupon_label\"]);
        \$(\"#coupon-value-mobile\").html(json[\"coupon_value\"]);

         
      }
      

\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
</script>




<custom-cursor class=\"custom-cursor\" style=\"transform: translate(510px, 133px);\"><img class=\"custom-cursor__icon\"></custom-cursor>


<plm-smooth-scroll class=\"plm-smooth-scroll\">
   <div class=\"plm-smooth-scroll__scroll\" data-scroll-container=\"\">
      <div class=\"plm-smooth-scroll__section\" data-scroll-section=\"\" data-scroll-section-inview=\"\" style=\"transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1; pointer-events: all;\">
         <div class=\"plm-smooth-scroll__inner is-inview\" data-scroll=\"\">
            <div class=\"content\" id=\"root\">
               <div class=\"item\">
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 255,  431 => 248,  423 => 242,  411 => 232,  407 => 231,  394 => 225,  392 => 224,  386 => 223,  381 => 222,  376 => 221,  374 => 220,  369 => 219,  367 => 218,  363 => 217,  353 => 214,  351 => 213,  345 => 212,  341 => 211,  338 => 210,  334 => 209,  331 => 208,  329 => 207,  299 => 179,  288 => 177,  284 => 176,  254 => 149,  246 => 143,  240 => 141,  238 => 140,  232 => 139,  219 => 129,  178 => 90,  173 => 47,  165 => 45,  161 => 44,  150 => 42,  146 => 41,  141 => 40,  132 => 38,  128 => 37,  115 => 35,  111 => 34,  105 => 31,  99 => 28,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}