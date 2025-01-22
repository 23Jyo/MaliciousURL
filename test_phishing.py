
# coding: utf-8

# In[12]:


import joblib as job
import pandas as pd
from feature import FeatureExtraction
import numpy as np


# In[13]:


#df=pd.read_csv("test.csv")


# In[14]:


fin = open("input_url.txt","r")
url = fin.read()


# In[16]:


obj = FeatureExtraction(url)


# In[17]:


x = np.array(obj.getFeaturesList()).reshape(1,30) 
print(x)


# In[18]:


model=job.load('model_rf.joblib')


# In[19]:


y_pred =model.predict(x)[0]
print(y_pred)
#1 is safe       
#-1 is unsafe

