
import React from 'react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Brain, BarChart3, MessageSquare, Database, Shield, Globe } from "lucide-react";

const solutions = [
  {
    icon: <Brain className="h-10 w-10 text-innovatis-purple" />,
    title: "AI Consulting",
    description: "Strategic guidance on implementing AI solutions tailored to your business needs and goals."
  },
  {
    icon: <BarChart3 className="h-10 w-10 text-innovatis-purple" />,
    title: "Predictive Analytics",
    description: "Leverage your data to forecast trends, anticipate market changes, and make data-driven decisions."
  },
  {
    icon: <MessageSquare className="h-10 w-10 text-innovatis-purple" />,
    title: "Conversational AI",
    description: "Custom chatbots and virtual assistants to enhance customer engagement and automate support."
  },
  {
    icon: <Database className="h-10 w-10 text-innovatis-purple" />,
    title: "Data Management",
    description: "AI-powered solutions for organizing, analyzing, and extracting valuable insights from your data."
  },
  {
    icon: <Shield className="h-10 w-10 text-innovatis-purple" />,
    title: "AI Security",
    description: "Advanced threat detection and prevention systems to safeguard your digital assets."
  },
  {
    icon: <Globe className="h-10 w-10 text-innovatis-purple" />,
    title: "Media Management",
    description: "AI tools for content creation, curation, and optimization across digital platforms."
  }
];

const SolutionsSection = () => {
  return (
    <section id="solutions" className="section-padding bg-white">
      <div className="section-container">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">Our AI Solutions</h2>
          <p className="text-lg text-innovatis-gray-dark">
            Comprehensive AI services designed to address your most complex business challenges
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {solutions.map((solution, index) => (
            <Card key={index} className="border border-innovatis-gray-light/60 shadow-sm hover:shadow-md transition-shadow">
              <CardHeader>
                <div className="mb-2">{solution.icon}</div>
                <CardTitle className="text-xl text-innovatis-blue">{solution.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <CardDescription className="text-innovatis-gray-dark text-base">
                  {solution.description}
                </CardDescription>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default SolutionsSection;
