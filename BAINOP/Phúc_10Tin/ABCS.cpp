#include<bits/stdc++.h>
using namespace std;
long long int O[7]={},a,b,c;
int main()
{
    freopen("ABCS.INP","r",stdin);
    freopen("ABCS.OUT","w",stdout);
    for(int i=0;i<7;i++) cin>>O[i];
    sort(O,O+7);
    a=O[0];
    for(int i=1;i<6;i++){
        for(int j=i+1;j<6;j++){
            if(O[i]+O[j]==O[6]-O[0]) {
                b=O[i];
                c=O[j];
            }
        }
    }
    cout<<a<<"  "<<b<<"  "<<c;

}
