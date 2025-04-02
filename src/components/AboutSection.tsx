
import React from 'react';

const AboutSection = () => {
  return (
    <section id="about" className="section-padding bg-innovatis-gray-light">
      <div className="section-container">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-3xl md:text-4xl font-bold mb-6">About Innovatis AI</h2>
            <p className="text-lg mb-4 text-innovatis-gray-dark">
              At Innovatis AI, we're dedicated to making artificial intelligence accessible, 
              practical, and transformative for businesses of all sizes.
            </p>
            <p className="text-lg mb-6 text-innovatis-gray-dark">
              Our team of AI specialists, data scientists, and business consultants work 
              collaboratively to deliver solutions that drive real business outcomes.
            </p>
            
            <div className="space-y-4">
              <div className="flex items-start">
                <div className="innovatis-gradient-bg rounded-full p-1 mr-4 mt-1">
                  <div className="bg-white rounded-full w-4 h-4"></div>
                </div>
                <p className="text-innovatis-gray-dark">
                  <span className="font-semibold">Innovation-Driven</span>: We continuously explore the cutting edge of AI to bring you the latest advancements.
                </p>
              </div>
              
              <div className="flex items-start">
                <div className="innovatis-gradient-bg rounded-full p-1 mr-4 mt-1">
                  <div className="bg-white rounded-full w-4 h-4"></div>
                </div>
                <p className="text-innovatis-gray-dark">
                  <span className="font-semibold">Results-Focused</span>: Our solutions are designed to deliver measurable ROI and tangible business impact.
                </p>
              </div>
              
              <div className="flex items-start">
                <div className="innovatis-gradient-bg rounded-full p-1 mr-4 mt-1">
                  <div className="bg-white rounded-full w-4 h-4"></div>
                </div>
                <p className="text-innovatis-gray-dark">
                  <span className="font-semibold">Client-Centric</span>: We take the time to understand your unique challenges and tailor our approach accordingly.
                </p>
              </div>
            </div>
          </div>
          
          <div className="relative">
            <div className="aspect-square max-w-md mx-auto rounded-2xl overflow-hidden innovatis-gradient-bg p-1">
              <div className="bg-white h-full w-full rounded-xl flex items-center justify-center">
                <div className="text-center p-8">
                  <div className="text-6xl font-bold innovatis-gradient-text mb-4">10+</div>
                  <p className="text-xl text-innovatis-gray-dark mb-8">Years of AI Excellence</p>
                  
                  <div className="grid grid-cols-2 gap-6">
                    <div>
                      <div className="text-3xl font-bold text-innovatis-blue mb-1">200+</div>
                      <p className="text-sm text-innovatis-gray-dark">Client Projects</p>
                    </div>
                    <div>
                      <div className="text-3xl font-bold text-innovatis-purple mb-1">50+</div>
                      <p className="text-sm text-innovatis-gray-dark">AI Experts</p>
                    </div>
                    <div>
                      <div className="text-3xl font-bold text-innovatis-teal mb-1">98%</div>
                      <p className="text-sm text-innovatis-gray-dark">Client Satisfaction</p>
                    </div>
                    <div>
                      <div className="text-3xl font-bold text-innovatis-blue mb-1">24/7</div>
                      <p className="text-sm text-innovatis-gray-dark">Support</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;
