from sklearn.ensemble import RandomForestClassifier
from sklearn.ensemble import AdaBoostClassifier
from sklearn.linear_model import LinearRegression
from sklearn.metrics import accuracy_score
from sklearn.model_selection import train_test_split
import pandas as pd
import numpy as np
import seaborn as sb
from openpyxl.workbook import Workbook
import xlrd

desired_width=320
df = pd.read_excel(r'C:\Users\Sohail\Desktop\heart-disease-uci-project\heart_project.xlsx')

pd.set_option('display.width', desired_width)          #Allowing all columns to be displayed
np.set_printoptions(linewidth=desired_width)
pd.set_option('display.max_columns',25)
'''
length = len(df)                                                       #Splitting data in another way
df['partition'] = np.random.uniform(0,1,length) <= 0.75

train,test = df[df['partition'] == True ], df[df['partition'] == False]
'''
columns = ['age','sex','cp','trestbps','chol','fbs','restecg','thalach','exang','oldpeak','slope','ca','thal']
x_train,x_test,y_train,y_test = train_test_split(df[columns],df['target'],test_size = 0.75)
print(x_train)
rfc = RandomForestClassifier()
AdaBoost = AdaBoostClassifier(base_estimator = rfc , n_estimators = 400 , learning_rate = 1)

fitting = AdaBoost.fit(x_train,y_train)                     #Fitting model
pred_target_values = fitting.predict(x_test)             #Predicting class values

print(accuracy_score(y_test,pred_target_values))
'''
prob = rfc.predict_proba(test[columns])[0:10]              #Print predicted probability of each value
print(prob)

matrix = pd.crosstab(test['target'],pred_target_values,rownames=['Actual'],colnames=['Predicted'])
#print(matrix)
reorder = matrix.unstack().reorder_levels(('Actual','Predicted'))
#print(reorder)


Calc_Rel = dtarget + (dthalach/dtresbps)               Database Operations
dExtent = Calc_Rel - df['Calc_Rel'].min()/df['Calc_Rel'].max()-df['Calc_Rel'].min()
'''