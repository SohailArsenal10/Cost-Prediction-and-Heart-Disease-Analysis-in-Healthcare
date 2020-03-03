from sklearn.linear_model import LinearRegression
from sklearn.metrics import accuracy_score
from sklearn.model_selection import train_test_split
import pandas as pd
import numpy as np
import seaborn as sb
from openpyxl.workbook import Workbook
import xlrd

desired_width=320
df1 = pd.read_excel(r'C:\Users\Sohail\Desktop\heart-disease-uci-project\Patient_Payment_State1.xlsx')

pd.set_option('display.width', desired_width)          #Allowing all columns to be displayed
np.set_printoptions(linewidth=desired_width)
pd.set_option('display.max_columns',25)

#print(len(df1))
df1.set_index('State',inplace=True)
columns = ['Prov_Name', 'State_Region', 'Avg_Tot_Pay', 'Avg_Acc_Pay','Avg_Med_Pay']


df1['Avg_Med_Pay'] = df1['Avg_Tot_Pay'] - df1['Avg_Acc_Pay']
Min = df1['Avg_Tot_Pay'].min()
Max = df1['Avg_Tot_Pay'].max()

df1['Extent_Disease'] = (df1['Avg_Tot_Pay'] - Min)/ (Max-Min)



Y= np.array(df1['Avg_Tot_Pay'])
X = np.array(df1['Extent_Disease']).reshape((-1,1))

x_train,x_test,y_train,y_test = train_test_split(X,Y,test_size = 0.25)

'''
Z = [[0.4765]]
     
'''
lin = LinearRegression()
fitting = lin.fit(x_train,y_train)     #Fitting total payment data
pred_target_values = fitting.predict(x_test)
print(pred_target_values)
print(fitting.score(X,Y))




#pred_target_values1 = fitting.predict(Z)


