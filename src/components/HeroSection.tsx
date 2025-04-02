
import React, { useState } from 'react';
import { Button } from "@/components/ui/button";
import CalendlyModal from './CalendlyModal';

const HeroSection = () => {
  const [isCalendlyOpen, setIsCalendlyOpen] = useState(false);

  const scrollToContact = () => {
    const contactSection = document.getElementById('contact');
    if (contactSection) {
      contactSection.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section className="pt-32 pb-20 md:pt-40 md:pb-28 bg-gradient-to-b from-white to-innovatis-gray-light">
      <div className="container mx-auto px-4 sm:px-6 lg:px-8">
        <div className="max-w-4xl mx-auto text-center">
          <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 animate-fade-in">
            Transform Your Business with
            <span className="innovatis-gradient-text block"> Innovative AI Solutions</span>
          </h1>
          
          <p className="text-lg md:text-xl text-innovatis-gray-dark mb-8 animate-fade-in-up">
            Empower your organization with cutting-edge artificial intelligence. 
            Our corporate solutions deliver data-driven insights and automate complex processes.
          </p>
          
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style={{ animationDelay: "0.2s" }}>
            <Button 
              onClick={() => setIsCalendlyOpen(true)}
              className="bg-innovatis-blue hover:bg-innovatis-blue/90 text-white px-8 py-6 text-lg"
              size="lg"
            >
              Schedule a Consultation
            </Button>
            
            <Button 
              variant="outline" 
              className="border-innovatis-purple text-innovatis-purple hover:bg-innovatis-purple/10 px-8 py-6 text-lg"
              size="lg"
              onClick={() => document.getElementById('solutions')?.scrollIntoView({ behavior: 'smooth' })}
            >
              Explore Solutions
            </Button>
          </div>
        </div>
      </div>

      <div className="max-w-5xl mx-auto mt-16 px-4 animate-fade-in-up" style={{ animationDelay: "0.4s" }}>
        <div className="bg-gradient-to-tr from-innovatis-blue via-innovatis-purple to-innovatis-teal p-1 rounded-xl shadow-xl">
          <div className="bg-white rounded-lg p-4">
            <div className="aspect-video bg-innovatis-gray-light rounded-md flex items-center justify-center">
              <div className="text-center">
                <p className="text-lg text-innovatis-gray-dark mb-2">AI Platform Demo</p>
                <p className="text-sm text-innovatis-gray-dark/70">Interactive visualization would appear here</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <CalendlyModal isOpen={isCalendlyOpen} onClose={() => setIsCalendlyOpen(false)} />
    </section>
  );
};

export default HeroSection;
